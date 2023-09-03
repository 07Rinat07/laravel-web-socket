<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendLikeEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(string $likeStr, int $userId)
    {
        $this->likeStr = $likeStr;
        $this->userId = $userId;
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('send_like_' . $this->userId),
        ];
    }

    public function broadcastAs(): string
    {
        return 'send_like';
    }

    public function broadcastWith(): array
    {
        return [
            'like_str' => $this->likeStr
        ];
    }
}
