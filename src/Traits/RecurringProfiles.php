<?php

namespace BaladevPro\PayPal\Traits;

use Carbon\Carbon;

trait RecurringProfiles
{
    /**
     * Create recurring subscription on monthly basis.
     *
     * @param string $token
     * @param float  $amount
     * @param string $description
     *
     * @return array
     */
    public function createMonthlySubscription($token, $amount, $description)
    {
        return $this->createSubscription($token, $amount, 'Month', 1, $description);

    }

    /**
     * Create recurring subscription on yearly basis.
     *
     * @param string $token
     * @param float  $amount
     * @param string $description
     *
     * @return array
     */
    public function createYearlySubscription($token, $amount, $description)
    {
        return $this->createSubscription($token, $amount, 'Year', 1, $description);
    }

    /**
     * Create recurring subscription on daily basis.
     *
     * @param string $token
     * @param float  $amount
     * @param string $description
     *
     * @return array
     */
    public function createDailySubscription($token, $amount, $description)
    {
        return $this->createSubscription($token, $amount, 'Day', 1, $description);
    }


    /**
     * Create custome recurring subscription on basis of billing peiod and billing frequency.
     *
     * @param string $token
     * @param float $amount
     * @param string $billingPeriod
     * @param integer $billingFrequency
     * @param string $description
     *
     * @return array
     * @throws \Exception
     */
    public function createSubscription($token, $amount, $billingPeriod, $billingFrequency, $description)
    {
        if(in_array($billingPeriod, ['Year', 'Day', 'Month'])) {
            $data = [
                'PROFILESTARTDATE' => Carbon::now()->toAtomString(),
                'DESC'             => $description,
                'BILLINGPERIOD'    => $billingPeriod,
                'BILLINGFREQUENCY' => $billingFrequency,
                'AMT'              => $amount,
                'CURRENCYCODE'     => $this->currency,
            ];

            return $this->createRecurringPaymentsProfile($data, $token);
        }

        // else
        return [];
    }
}
