<?php

class __Mustache_05b16923beba22e3a506b3639a75d6bc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'options.sections.first.enabled' section
        $buffer .= $this->section92170bdde59f63d992a8781ba0cfcd1f($context, $indent, $context->findDot('options.sections.first.enabled'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section92170bdde59f63d992a8781ba0cfcd1f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	IT IS ENABLED
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	IT IS ENABLED';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}