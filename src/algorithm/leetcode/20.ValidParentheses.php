<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $stack = [];
        for ($i = 0, $len = strlen($s); $i < $len; $i++) {
            $char = $s[$i];
            // 只有开括号才入栈
            if ($this->_isOpen($char)) {
                array_push($stack, $char);
                continue;
            }
            //取栈顶
            $top = $stack[count($stack) - 1];
            //与栈顶匹配则栈顶出栈，若不匹配直接返回false
            if ($this->_isMatch($top, $char)) {
                array_pop($stack);
            } else {
                return false;
            }
        }
        return count($stack) === 0;
    }

    // 是否开括号
    private function _isOpen($char)
    {
        return $char === '(' || $char === '[' || $char === '{';
    }

    // 括号是否匹配
    private function _isMatch($l, $r)
    {
        return ($l === '(' && $r === ')') ||
            ($l === '[' && $r === ']') ||
            ($l === '{' && $r === '}');
    }
}


$solution = new Solution();
var_dump($solution->isValid("()"));
