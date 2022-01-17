<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\SecretsManagerAws;

use Spryker\Client\Kernel\AbstractBundleConfig;
use Spryker\Shared\SecretsManagerAws\SecretsManagerAwsConstants;

class SecretsManagerAwsConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @return string
     */
    public function getSecretsManagerAwsAccessKey(): string
    {
        return $this->get(SecretsManagerAwsConstants::SECRETS_MANAGER_AWS_ACCESS_KEY, '');
    }

    /**
     * @api
     *
     * @return string
     */
    public function getSecretsManagerAwsAccessSecret(): string
    {
        return $this->get(SecretsManagerAwsConstants::SECRETS_MANAGER_AWS_ACCESS_SECRET, '');
    }

    /**
     * @api
     *
     * @return string
     */
    public function getSecretsManagerAwsEndpoint(): string
    {
        return $this->get(SecretsManagerAwsConstants::SECRETS_MANAGER_AWS_ENDPOINT, '');
    }

    /**
     * @api
     *
     * @return string
     */
    public function getSecretsManagerAwsRegion(): string
    {
        return $this->get(SecretsManagerAwsConstants::SECRETS_MANAGER_AWS_REGION, '');
    }

    /**
     * @api
     *
     * @return string
     */
    public function getSecretsManagerAwsVersion(): string
    {
        return $this->get(SecretsManagerAwsConstants::SECRETS_MANAGER_AWS_VERSION, '');
    }
}
