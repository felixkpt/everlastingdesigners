<?php $items = @($people ?: $countries ?: $items ?: $posts); 
if (method_exists($items, 'links')) {
?>
<div class="flex w-full my-8 justify-center">
    <div class="flex">
        {{ $items->links('pagination::tailwind') }}
    </div>
</div>
<?php } ?>