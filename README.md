# Synth Notification Bundle

The concept of this bundle is to provide a notification system, much like that of Facebook (but a basic version at
present).

Very much a work in progress! Feel free to fork and fix as you see fit =)

## Installation

Update your `deps` file, and add the following lines:

    [SynthNotificationBundle]
        git=http://github.com/synthmedia/SynthNotificationBundle.git
        target=/bundles/Synth/NotificationBundle

After that, just install the new dependencies:

    $ ./bin/vendor install

Register the bundle namespace in the autoloader (if you haven't already):

    // app/autoloader.php
    $autoloader->registerNamespaces(array(
        // ...
        'Synth'       => __DIR__.'/../vendor/bundles',
    ));

Finally, make sure that the `SynthNotificationBundle` is registered in the application kernel:

    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Synth\NotificationBundle\SynthNotificationBundle(),
        );
    }

At present, the bundle only supports `orm`, sorry! If anyone is interested in helping out with an `odm` adaptation, give
us a shout.

## Basic Usage

Out of the box, the bundle assumes you're using the FOSUserBundle for your user authentication. If you're not, just make
sure you implement the abstract Notification class in the Model directory.

## Credits

[Dom Udall](https://github.com/dmno/)

## Licence
Licenced under the [New BSD License](http://opensource.org/licenses/bsd-license.php)