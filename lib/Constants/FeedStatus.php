<?php

namespace eBay\Sell\Feed\Constants;

/**
 * https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum
 */
class FeedStatus
{
    public const CREATED = 'CREATED';
    public const QUEUED = 'QUEUED';
    public const IN_PROCESS = 'IN_PROCESS';
    public const COMPLETED = 'COMPLETED';
    public const COMPLETED_WITH_ERROR = 'COMPLETED_WITH_ERROR';
    public const FAILED = 'FAILED';
    public const PARTIALLY_PROCESSED = 'PARTIALLY_PROCESSED';
}
