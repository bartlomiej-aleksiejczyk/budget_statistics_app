<?php

namespace App\Enum;

enum AssetSourceType: string
{
    case CASH_WALLET = 'CASH_WALLET';
    case BANK_ACCOUNT = 'BANK_ACCOUNT';
    case PHYSICAL_ASSET = 'PHYSICAL_ASSET';
    case INVESTMENT_ACCOUNT = 'INVESTMENT_ACCOUNT';
    case CARD_ACCOUNT = 'CARD_ACCOUNT';
    case LIABILITY_ACCOUNT = 'LIABILITY_ACCOUNT';
    case CRYPTO_WALLET = 'CRYPTO_WALLET';
    case OTHER = 'OTHER';
}
