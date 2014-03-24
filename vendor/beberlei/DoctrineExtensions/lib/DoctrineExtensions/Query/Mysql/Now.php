<?php

namespace DoctrineExtensions\Query\Mysql;

use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\AST\Functions\FunctionNode;

/**
 * Clase Now
 *
 * @author Oswaldo
 * @fecha Sáb 22 Mar 2014 - 11:22:55
 * 
 * "NOW" Modified from DoctrineExtensions\Query\Mysql\Now
 *
 * @category    DoctrineExtensions
 * @package     DoctrineExtensions\Query\Mysql
 */
class Now extends FunctionNode {
    
    /**
     * @override
     */
    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker) { return 'NOW()'; }
    
    /**
     * @override
     */
    public function parse(\Doctrine\ORM\Query\Parser $parser) {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
    
}