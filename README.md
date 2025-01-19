# PSR-11 Container interface generic (psalm phpstan)

## Config

```xml
<stubs>
    <file name="vendor/onepix/psr11-container-interface-generic/ContainerInterface.php"/>
</stubs>
```

## Usage

```php
final class App 
{
     /**
     * @param  ContainerInterface<Controller>  $controllers
     */
    public function __construct(
        private ContainerInterface $controllers,
    ) {
    }
}
```

```php
/**
 * @implements ContainerInterface<Controller>
 */
final class ControllerContainer implements ContainerInterface
{
    public function get(string $id) {}

    public function has(string $id): bool {}
}
```