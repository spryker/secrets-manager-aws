<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\SecretsManagerAws\Plugin\SecretsManager;

use Generated\Shared\Transfer\SecretTransfer;
use Spryker\Client\Kernel\AbstractPlugin;
use Spryker\Client\SecretsManagerExtension\Dependency\Plugin\SecretsManagerClientPluginInterface;

/**
 * @method \Spryker\Client\SecretsManagerAws\SecretsManagerAwsClientInterface getClient()
 */
class SecretsManagerAwsClientPlugin extends AbstractPlugin implements SecretsManagerClientPluginInterface
{
    /**
     * {@inheritDoc}
     * - Requires `Secret.value` to be set.
     * - Requires `Secret.secretKey.identifier` to be set.
     * - Requires `Secret.secretKey.prefix` to be set.
     * - Generates AWS secret name using `Secret.secretKey`.
     * - Calls the AWS Secrets Manager client method to create a new secret.
     * - Logs the client error, if any.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\SecretTransfer $secretTransfer
     *
     * @return bool
     */
    public function createSecret(SecretTransfer $secretTransfer): bool
    {
        return $this->getClient()->createSecret($secretTransfer);
    }

    /**
     * {@inheritDoc}
     * - Requires `Secret.secretKey.identifier` to be set.
     * - Requires `Secret.secretKey.prefix` to be set.
     * - Generates AWS secret name using `Secret.secretKey`.
     * - Nullify `Secret.value` property.
     * - Calls the AWS Secrets Manager client method to retrieve a secret value.
     * - Logs the client error, if any.
     * - Fill `Secret.value` property with the secret value.
     * - Returns `Secret` transfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\SecretTransfer $secretTransfer
     *
     * @return \Generated\Shared\Transfer\SecretTransfer
     */
    public function getSecret(SecretTransfer $secretTransfer): SecretTransfer
    {
        return $this->getClient()->getSecret($secretTransfer);
    }
}
