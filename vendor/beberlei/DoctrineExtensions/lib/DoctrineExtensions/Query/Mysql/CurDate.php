<?php

namespace DoctrineExtensions\Query\Mysql;

use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\AST\Functions\FunctionNode;

/**
 * Clase CurDate
 *
 * @author Oswaldo
 * @fecha Sáb 22 Mar 2014 - 09:57:13
 * 
 * "CURDATE" Modified from DoctrineExtensions\Query\Mysql\CurDate
 *
 * @category    DoctrineExtensions
 * @package     DoctrineExtensions\Query\Mysql
 */
class CurDate extends FunctionNode {
    
    /**
     * @override
     */
    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker) { return 'CURDATE()'; }
    
    /**
     * @override
     */
    public function parse(\Doctrine\ORM\Query\Parser $parser) {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
    
}