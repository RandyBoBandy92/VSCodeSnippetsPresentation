# Creating Snippets

## Resources
- https://snippet-generator.app/

Snippet Generator handles writing all the json data for us, so we can write our code (nearly) like normal, then paste it in to the snippet generator.


## Example

As an example, let's say we want to make a php snippet that does a for loop in the alternative syntax (with `for` and `endfor`).

```php
// Example
$things = array(1,2,3)

for ($i=0; $i < count($things); $i++) :
    $thing = $things[i];
endfor;
```

There are 3 places where we will want to have tab stops:
1. to rename `$i`
1. to rename `$things`
1. to rename `$thing`