<style>
    pre {
        padding: 5px;
        background-color: lightgray;
        margin: 5px 0;
    }
</style>

{if $style}
    <link rel="stylesheet" href="{$style}">
{/if}

{rlmarkdown text=$text}