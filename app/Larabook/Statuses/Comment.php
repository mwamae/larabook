<?php namespace Larabook\Statuses;


class Comment extends \Eloquent{

    protected $fillable=['status_id', 'user_id', 'body'];

    public function owner()
    {
        return $this->belongsTo('Larabook\Users\User', 'user_id');
    }

    /**
     * @param $body
     * @param $statusId
     * @return static
     */
    public static function leave($body, $statusId)
    {
        return new static ([
            'body' => $body,
            'status_id' => $statusId
        ]);
    }
}