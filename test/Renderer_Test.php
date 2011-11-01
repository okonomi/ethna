<?php
/**
 *  Renderer_Test.php
 */

/**
 *  Ethna_Rendererクラスのテストケース
 */
class Ethna_Renderer_Test extends Ethna_UnitTestBase
{
    var $renderer;

    function setUp()
    {
        $this->renderer = new Ethna_Renderer($this->ctl);
    }

    function test_getEngine()
    {
        $this->assertNULL($this->renderer->getEngine());
    }
}
