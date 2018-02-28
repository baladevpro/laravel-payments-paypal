<?php

namespace BaladevPro\PayPal;

class Api
{
    const BILLINGPERIOD_DAY         = 'Day';
    const BILLINGPERIOD_WEEK        = 'Week';
    const BILLINGPERIOD_SEMIMONTH   = 'SemiMonth';    // For SemiMonth, billing is done on the 1st and 15th of each month.
    const BILLINGPERIOD_MONTH       = 'Month';
    const BILLINGPERIOD_YEAR        = 'Year';
}