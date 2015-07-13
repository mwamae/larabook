<?php namespace Larabook\Statuses;


class PublishStatusCommand {

    public $body;

    public $userId;

  public function __construct($body, $userId)
    {
        $this->userId = $userId;
        $this->body = $body;
    }


}