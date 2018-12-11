<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace R_kvstore\Request\V20150101;

class CreateAccountRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("R-kvstore", "2015-01-01", "CreateAccount", "redisa", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $accountType;

	private  $ownerId;

	private  $accountDescription;

	private  $accountPrivilege;

	private  $accountPassword;

	private  $instanceId;

	private  $accountName;

	private  $securityToken;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getAccountType() {
		return $this->accountType;
	}

	public function setAccountType($accountType) {
		$this->accountType = $accountType;
		$this->queryParameters["AccountType"]=$accountType;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getAccountDescription() {
		return $this->accountDescription;
	}

	public function setAccountDescription($accountDescription) {
		$this->accountDescription = $accountDescription;
		$this->queryParameters["AccountDescription"]=$accountDescription;
	}

	public function getAccountPrivilege() {
		return $this->accountPrivilege;
	}

	public function setAccountPrivilege($accountPrivilege) {
		$this->accountPrivilege = $accountPrivilege;
		$this->queryParameters["AccountPrivilege"]=$accountPrivilege;
	}

	public function getAccountPassword() {
		return $this->accountPassword;
	}

	public function setAccountPassword($accountPassword) {
		$this->accountPassword = $accountPassword;
		$this->queryParameters["AccountPassword"]=$accountPassword;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getAccountName() {
		return $this->accountName;
	}

	public function setAccountName($accountName) {
		$this->accountName = $accountName;
		$this->queryParameters["AccountName"]=$accountName;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}
	
}