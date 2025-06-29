<?php

namespace App\Behavioral\State;

enum StateEnum: string
{
    case Created = "CREATED";

    case Collected = "COLLECTED";

    case Paid = "PAID";

    case Delivered = "DELIVERED";

    case Done = "DONE";

    case Cancelled = "CANCELLED";

    case Archived = "ARCHIVED";

}
