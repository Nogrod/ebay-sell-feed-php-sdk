<?php

namespace eBay\Sell\Feed\Constants;

/**
 * https://developer.ebay.com/api-docs/sell/static/lms-migration/lms-to-feed-feedtype.html
 * https://developer.ebay.com/api-docs/sell/static/feed/lms-feeds-quick-reference.html
 */
class FeedType
{
    public const FX_FULFILLMENT = 'FX_FULFILLMENT';
    public const FX_LISTING = 'FX_LISTING';
    public const LMS_ACTIVE_INVENTORY_REPORT = 'LMS_ACTIVE_INVENTORY_REPORT';
    public const LMS_ADD_FIXED_PRICE_ITEM = 'LMS_ADD_FIXED_PRICE_ITEM';
    public const LMS_ADD_ITEM = 'LMS_ADD_ITEM';
    public const LMS_END_FIXED_PRICE_ITEM = 'LMS_END_FIXED_PRICE_ITEM';
    public const LMS_END_ITEM = 'LMS_END_ITEM';
    public const LMS_ORDER_ACK = 'LMS_ORDER_ACK';
    public const LMS_ORDER_REPORT = 'LMS_ORDER_REPORT';
    public const LMS_RELIST_FIXED_PRICE_ITEM = 'LMS_RELIST_FIXED_PRICE_ITEM';
    public const LMS_RELIST_ITEM = 'LMS_RELIST_ITEM';
    public const LMS_REVISE_FIXED_PRICE_ITEM = 'LMS_REVISE_FIXED_PRICE_ITEM';
    public const LMS_REVISE_INVENTORY_STATUS = 'LMS_REVISE_INVENTORY_STATUS';
    public const LMS_REVISE_ITEM = 'LMS_REVISE_ITEM';
    public const LMS_SET_SHIPMENT_TRACKING_INFO = 'LMS_SET_SHIPMENT_TRACKING_INFO';
    public const LMS_VERIFY_ADD_ITEM = 'LMS_VERIFY_ADD_ITEM';
    public const LMS_VERIFY_ADD_FIXED_PRICE_ITEM = 'LMS_VERIFY_ADD_FIXED_PRICE_ITEM';
}
