<?php
/**
 * ezcDocTestConvertXhtmlDocbook
 * 
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Document
 * @version //autogen//
 * @subpackage Tests
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

require_once dirname( __FILE__ ) . '/options_test_case.php';

/**
 * Test suite for class.
 * 
 * @package Document
 * @subpackage Tests
 */
class ezcDocumentOptionsOdtTests extends ezcDocumentOptionsTestCase
{
    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    protected function getOptionsClassName()
    {
        return 'ezcDocumentOdtOptions';
    }

    public static function provideDefaultValues()
    {
        $res = array(
            array(
                'indentXml', false,
            ),
            array(
                'failOnError', true,
            ),
            array(
                'imageDir', sys_get_temp_dir()
            )
        );
        return $res;
    }

    public static function provideValidData()
    {
        return array(
            array(
                'indentXml',
                array( true, false ),
            ),
            array(
                'failOnError',
                array( true, false ),
            ),
            array(
                'imageDir', array( dirname( __FILE__ ) )
            )
        );
    }

    public static function provideInvalidData()
    {
        return array(
            array(
                'indentXml',
                array( 1, 'foo', .5, new StdClass(), array() ),
            ),
            array(
                'failOnError',
                array( 1, 'foo', .5, new StdClass(), array() ),
            ),
            array(
                'imageDir', array( '/foo', 'bar', 23, true, false, array() )
            )
        );
    }
}

?>
