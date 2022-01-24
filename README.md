# xhprof-graph-builder

### What it is?

Wrapper above the xhprof callgraph utils, with some simplifications

### What for it?
Create callgraph images from xhprof file

### Why?

Because I decided that make it a faster, than find some tools for create callgraph from .xhprof file without "voodoo" stuffs 

### How to use

step 1: make xhprof serialized file

```php
<?php
tideways_xhprof_enable();

doing_awsesome_application_stuff(); 

$data = tideways_xhprof_disable();
file_put_contents(
    "path/to/where/you/want/store/file/" . "yourapp.xhprof",
    serialize($data)
);
```

**Step 2: composer update**

**Step 3: run it with flags**

**Step 4: Profit!**

### What about flags
```
  --input /path/to/yourapp.xhprof                                                (-i, requried),
  --output /path/to/output/file"                                                 (-o, default callgraph),
  --type Output file extention                                                   (-t, default png)
  --threshold Filter out functions whose exclusive time ratio is below threshold (-h, default 0.01),  @see xhprof_generate_dot_script
  --description The root node name                                               (-d , default My awesome profiling!)
```
