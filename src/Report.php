<?php

namespace Spinen\Ncentral;

use Spinen\Ncentral\Support\Model;

/**
 * Class Report
 *
 * @property int $reportId
 * @property string $reportName
 * @property array $data
 */
class Report extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'reportId' => 'int',
        'data' => 'array',
    ];

    /**
     * Is the response a collection of items?
     */
    public bool $collection = false;

    /**
     * The primary key for the model.
     */
    protected string $primaryKey = 'reportId';

    /**
     * Path to API endpoint.
     */
    protected string $path = '/report';

    /**
     * Is the model readonly?
     */
    protected bool $readonlyModel = true;
}
