<?php

namespace Arokettu\Uri;

use League\Uri\QueryString;

if (\false) {
    class QueryStringProxy extends QueryString
    {
    }
}

class_alias(
    QueryString::class,
    QueryStringProxy::class
);
