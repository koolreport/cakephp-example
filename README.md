# How to use KoolReport in CakePHP?

CakePHP is one of earliest and greatest MVC framework for PHP. CakePHP has reached version 4.x with great improvement toward modern standard. CakePHP provide clean code, fast speed and large support community.

KoolReport is reporting framework and can be integrated into CakePHP or any other MVC framework.KoolReport help you to create data report faster and easier.

In this repository, we would like to demonstrate how KoolReport can be used inside CakePHP.

# Guide

## Installation

Run `composer` command to install `koolreport\core`

```
composer require koolreport\core
```

## Step to make reports

1. Inside `src` folder, create `Reports` folder to hold your reports
2. Create `MyReport.php` and `MyReport.view.php` inside `Reports` folder. Please see the contents of two files in our repository.
3. Inside `webroot` folder, create folder `koolreport_assets` to hold resources created by KoolReport

### Create controller and view

In `PagesController`, create `report()` action:

```php
public function report()
{
    $report = new \App\Reports\MyReport;
    $report->run();
    $this->set("report",$report);
    return $this->render();
}
```

Configure the routes inside `config/routes.php`

```
$builder->connect('/report', ['controller' => 'Pages', 'action' => 'report']);
```

All done!

## View result

Now you can access:

```
http://locahost/cakephp-example/report
```

you will see

![](https://www.koolreport.com/assets/images/editor/c4/image5e536edd9864f.png)


# Summary

KoolReport is a great php reporting framework. You can use KoolReport alone with pure php or inside any modern MVC frameworks like CakePHP, Laravel, Symfony. If you have any questions regarding KoolReport, free free to contact us at [our forum](https://www.koolreport.com/forum/topics) or email to [support@koolreport.com](mailto:support@koolreport.com).

__Happy Reporting!__