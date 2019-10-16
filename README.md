<p align="center"><img src="https://laravel.com/assets/img/components/logo-horizon.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/horizon"><img src="https://travis-ci.org/laravel/horizon.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/horizon"><img src="https://poser.pugx.org/laravel/horizon/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/horizon"><img src="https://poser.pugx.org/laravel/horizon/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/horizon"><img src="https://poser.pugx.org/laravel/horizon/license.svg" alt="License"></a>
</p>

## About this fork

This is a fork of Laravel Horizon that adds the following features on top of v3.4.1:

- Ability to retry recent pending jobs if they are stuck (delete and push)
- Differentiate in color between pending / reserved jobs
- Support for viewing full recent/monitored job details
- Extended job info on recent/monitored job view
- Filter recent jobs by status

**You can see the following about each recent/monitored job:**

- Attempts count
- Queued at: the exact time a job was pushed to the queue
- Timeout at: the exact time a job will timeout if not processed (relies on the job timout)
- Reserved at: the time a job was delayed to
- Completed at: the time a job was completed successfully
- Waiting for: how many minutes a pending/reserved job has been waiting for 

<p align="center">
<img src="https://user-images.githubusercontent.com/2760582/66949412-c4231d00-f056-11e9-95b5-80795f9a4ae0.png" width="430">
</p>

_____________

## Introduction

Horizon provides a beautiful dashboard and code-driven configuration for your Laravel powered Redis queues. Horizon allows you to easily monitor key metrics of your queue system such as job throughput, runtime, and job failures.

<p align="center">
<img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1551286550/HorizonLight.png" width="430">
<img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1551286550/HorizonDark.png" width="430">
</p>

All of your worker configuration is stored in a single, simple configuration file, allowing your configuration to stay in source control where your entire team can collaborate.

## Official Documentation

Documentation for Horizon can be found on the [Laravel website](https://laravel.com/docs/horizon).

## License

Laravel Horizon is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
