<?php

namespace TCGunel\BizimHesapB2b\Models\Requests;

use Carbon\Carbon;

class InvoiceDates
{
    /** @var Carbon */
    protected $invoiceDate;

    /** @var Carbon */
    protected $dueDate;

    /** @var Carbon */
    protected $deliveryDate;

    /**
     * @param Carbon $invoiceDate
     * @return InvoiceDates
     */
    public function setInvoiceDate(Carbon $invoiceDate): InvoiceDates
    {
        $this->invoiceDate = $invoiceDate->toDateTimeLocalString();

        return $this;
    }

    /**
     * @param Carbon $dueDate
     * @return InvoiceDates
     */
    public function setDueDate(Carbon $dueDate): InvoiceDates
    {
        $this->dueDate = $dueDate->toDateTimeLocalString();

        return $this;
    }

    /**
     * @param Carbon $deliveryDate
     * @return InvoiceDates
     */
    public function setDeliveryDate(Carbon $deliveryDate): InvoiceDates
    {
        $this->deliveryDate = $deliveryDate->toDateTimeLocalString();

        return $this;
    }

    public function __toArray()
    {
        return call_user_func('get_object_vars', $this);
    }
}
