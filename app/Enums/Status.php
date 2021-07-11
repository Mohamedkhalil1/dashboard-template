<?php


namespace App\Enums;


class Status extends BaseEnum
{
    const PROCESSING = 0;
    const SUCCESS = 1;
    const DECLINE = 2;

    protected static function labels(): array
    {
        return [
            self::PROCESSING => __('Processing'),
            self::SUCCESS       => __('Success'),
            self::DECLINE    => __('Decline'),
        ];
    }

    public static function getColor($status): string
    {
        switch ($status) {
            case self::PROCESSING:
                return 'warning';
            case self::SUCCESS:
                return 'success';
            case self::DECLINE:
                return 'danger';
            default:
                return '';
        }
    }
}
