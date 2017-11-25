# MVC Skeleton test
Welcome to hosco's practial test. Instructions are simple: we are requiring via composer the Zend MVC Console component to attempt a simple hello world.

The directory structure has been laid out for you already, but is missing a few things in order for the CLI command `php index.php hello-world` to work.

Here's what you need to do:
- Fork this repository
- Deploy a php configuration file with:
  - A console route for the hello world
  - Your controller definitions (and corresponding PSR compliant factory)
- Have Module.php read the configuration file for it to work
- Create your controller and factory

You can always have a look over here if you need help: https://github.com/zendframework/ZendSkeletonApplication

**Please keep in mind**:
- Keep things simple
- We are looking for the cleanest code along with industry standards (PSR, docblocks, etc...)
- Less is more

You are **always** welcome to ask for help if things are unclear. We always encourage communication inside the team and this test doesn't prevent it!

## Running Unit Tests

To run the supplied unit tests, you need to do one of the following:

```bash
$ ./vendor/bin/phpunit
```
