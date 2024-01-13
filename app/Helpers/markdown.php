<?php

if(!function_exists("parseMarkdown"))
{
    /**
     * Parse markdown string to plain HTML
     *
     * @param string $markdown
     * @return string
     */
    function parseMarkdown(string $markdown) : string
    {
        return app(
            Spatie\LaravelMarkdown\MarkdownRenderer::class
        )->toHtml($markdown);
    }
}
