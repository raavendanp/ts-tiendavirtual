<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'productId' => $this->getId(),
            'productName' => $this->getName(),
            'productPrice' => $this->getPrice(),
            'productDescription' => $this->getDescription(),
            'productDetails' => $this->getDetails(),
            'productCatalogueId' => $this->catalogues->getId(),
            'productCatalogueName' => $this->catalogues->getName(),

        ];
    }
}
