<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpCsFixer\Tests\Tokenizer\Analyzer\Analysis;

use PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceAnalysis;
use PhpCsFixer\Tokenizer\Analyzer\Analysis\StartEndTokenAwareAnalysis;
use PhpCsFixer\Tests\TestCase;

/**
 * @author VeeWee <toonverwerft@gmail.com>
 *
 * @internal
 *
 * @covers \PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceAnalysis
 */
final class NamespaceAnalysisTest extends TestCase
{
    public function testStartEndTokenAwareAnalysis()
    {
        $analysis = new NamespaceAnalysis('Full\NamespaceName', 'NamespaceName', 1, 2);
        $this->assertInstanceOf(StartEndTokenAwareAnalysis::class, $analysis);
    }

    public function testFullName()
    {
        $analysis = new NamespaceAnalysis('Full\NamespaceName', 'NamespaceName', 1, 2);
        $this->assertSame('Full\NamespaceName', $analysis->getFullName());
    }

    public function testShortName()
    {
        $analysis = new NamespaceAnalysis('Full\NamespaceName', 'NamespaceName', 1, 2);
        $this->assertSame('NamespaceName', $analysis->getShortName());
    }

    public function testStartIndex()
    {
        $analysis = new NamespaceAnalysis('Full\NamespaceName', 'NamespaceName', 1, 2);
        $this->assertSame(1, $analysis->getStartIndex());
    }

    public function testEndIndex()
    {
        $analysis = new NamespaceAnalysis('Full\NamespaceName', 'NamespaceName', 1, 2);
        $this->assertSame(2, $analysis->getEndIndex());
    }
}
