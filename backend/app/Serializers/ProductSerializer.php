<?php

namespace App\Serializers;

class ProductSerializer extends BaseSerializer
{
  const BASIC = ["id", "name"];
  const LIST = ["id", "name", "price", "img"];
}
