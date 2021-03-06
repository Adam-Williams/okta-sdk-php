<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

class WebFactorProfileTest extends BaseUnitTestCase
{
    protected $model = '/UserFactors/factorProfileWeb.json';
    protected $modelType = \Okta\UserFactors\WebFactorProfile::class;

    /** @test */
    public function credential_id_is_gettable()
    {
        $this->assertEquals($this->properties->credentialId, $this->testable->getCredentialId());
        $this->assertEquals($this->properties->credentialId, $this->testable->credentialId);
    }

    /** @test */
    public function credential_id_is_settable()
    {
        $this->testable->setCredentialId('test@mailinator.com');
        static::assertEquals('test@mailinator.com', $this->testable->getCredentialId());

        $this->testable->credentialId = 'test2@mailinator.com';
        static::assertEquals('test2@mailinator.com', $this->testable->getCredentialId());
    }
    
}
