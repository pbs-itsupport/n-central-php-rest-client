<?php

namespace Spinen\Ncentral;

use Spinen\Ncentral\Support\Collection;
use Spinen\Ncentral\Support\Model;
use Spinen\Ncentral\Support\Relations\BelongsTo;
use Spinen\Ncentral\Support\Relations\HasMany;

/**
 * Class Device
 *
 * @property bool $isProbe
 * @property bool $stillLoggedIn
 * @property int $customerId
 * @property int $deviceId
 * @property string $customerName
 * @property string $description
 * @property string $deviceClass
 * @property string $deviceClassLabel
 * @property string $discoveredName
 * @property string $lastLoggedInUser
 * @property string $licenseMode
 * @property string $longName
 * @property string $osId
 * @property string $remoteControlUri
 * @property string $siteName
 * @property string $soName
 * @property string $sourceUri
 * @property string $supportedOS
 * @property string $supportedOSLabel
 * @property string $uri
 * @property-read Customer $customer
 * @property-read Collection|DeviceCustomProperty[] $customProperties
 */
class Device extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'customerId' => 'int',
        'deviceId' => 'int',
        'isProbe' => 'bool',
        'stillLoggedIn' => 'bool',
    ];

    /**
     * The primary key for the model.
     */
    protected string $primaryKey = 'deviceId';

    /**
     * Path to API endpoint.
     */
    protected string $path = '/devices';

    /**
     * Is the model readonly?
     */
    protected bool $readonlyModel = false;

    /**
     * Get the customer that owns this device
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customerId');
    }

    /**
     * Get the custom properties for this device
     */
    public function customProperties(): HasMany
    {
        return $this->hasMany(DeviceCustomProperty::class);
    }
}
