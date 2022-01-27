<?php

namespace eBay\Sell\Feed\Constants;

/**
 * https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum
 */
class FeedStatus
{
    const CREATED = 'CREATED';
    const QUEUED = 'QUEUED';
    const IN_PROCESS = 'IN_PROCESS';
    const COMPLETED = 'COMPLETED';
    const COMPLETED_WITH_ERROR = 'COMPLETED_WITH_ERROR';
    const FAILED = 'FAILED';
    const PARTIALLY_PROCESSED = 'PARTIALLY_PROCESSED';
}
