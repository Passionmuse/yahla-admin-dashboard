<?php

namespace App\Http\Controllers\apps\income;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Income extends Controller
{
  public function index()
  {
    return view('content.incomes.index');
  }

  public function userIncome()
  {
    $view = 'daily';
    if (request()->view) {
      $view = request()->view;
  }
    return view("content.user-income.index", compact("view"));
  }

  public function onlineShopIncome()
  {
    $view = 'daily';
    if (request()->view) {
      $view = request()->view;
  }
    return view("content.online-shop-income.index", compact("view"));  
  }

  public function serviceIncome()
  {
    $view = 'daily';
    if (request()->view) {
      $view = request()->view;
  }
    return view("content.service-income.index", compact("view"));  
  }

  public function eventsIncome()
  {
    $view = 'daily';
    if (request()->view) {
      $view = request()->view;
  }
    return view("content.events-income.index", compact("view"));  
  }  
  
  public function musicIncome()
  {
    $view = 'daily';
    if (request()->view) {
      $view = request()->view;
  }
    return view("content.music-income.index", compact("view"));  
  }  
  
  public function videoIncome()
  {
    $view = 'daily';
    if (request()->view) {
      $view = request()->view;
  }
    return view("content.video-income.index", compact("view")); 
   }  
  
  public function donationIncome()
  {
    $view = 'daily';
    if (request()->view) {
      $view = request()->view;
  }
    return view("content.donation-income.index", compact("view"));  
  }
  
  public function totalIncome()
  {
    $view = 'daily';
    if (request()->view) {
      $view = request()->view;
  }
    return view("content.total-income.index", compact("view"));
  }

  public function dailyIncome()
  {
    return view('content.total-income.index');
  }

  public function monthlyIncome()
  {
    return view('content.total-income.month');
  }

  public function yearlyIncome()
  {
    return view('content.total-income.year');
  }
}