<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\RetailLocationInsights;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;
use Test\BaseTest;



class RetailUnitsTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_retail_units()
        {
            

            

            $map = new RequestMap();
            $map->set("PageOffset", "1");
            $map->set("PageLength", "10");
            $map->set("StateId", "4");
            
            
            $response = RetailUnits::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.PageOffset", "1");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.TotalCount", "12");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[0].CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[0].CountryName", "AUSTRALIA");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[0].State", "4");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[1].CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[1].CountryName", "AUSTRALIA");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[1].State", "4");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[2].CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[2].CountryName", "AUSTRALIA");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[2].State", "4");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[3].CountryCode", "AUS");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[3].CountryName", "AUSTRALIA");
            $this->customAssertEqual($ignoreAssert, $response, "RetailUnitResponse.RetailUnits.RetailUnit[3].State", "4");
            

            self::putResponse("example_retail_units", $response);
            
        }
        
    
    
}



