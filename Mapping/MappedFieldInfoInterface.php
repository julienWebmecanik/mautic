<?php

declare(strict_types=1);

/*
 * @copyright   2018 Mautic Inc. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://www.mautic.com
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\IntegrationsBundle\Mapping;

interface MappedFieldInfoInterface
{
    public function getName(): string;
    public function getFormType() :string;
    public function getLabel(): string;
    public function isMandatory(): bool;
}
