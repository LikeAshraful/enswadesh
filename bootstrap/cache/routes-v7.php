<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gy7T8TPuUJbQZ8TP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0EPvieBjwp9OEvRZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lRkdAQNHKuRuLWzh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IZkJySBvPBqzBqyt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/areas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jH0xyGqhV2FIEuio',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AvDrUglYT1cM0Mjs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/markets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2pewKDMA1LQK91bo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zu1qd7s9lG5SjRUR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/floors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::THIIFzIepLQW2Xdl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/base/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y7A3lTPIOGYbiKsl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shops/shop-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zAV2ZKRrvcicVGnD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shops/search/shops-by-market' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I2A14nqSWxKuw1kh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uh2uCeTqpYVsZuGi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/flash-sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KnPstgX30Sn3EUIl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/festival-sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::do1ZJm1GnYowy1gJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LQCo3elHeyinJ1is',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hMipF7ZWcKB3Wgl6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user-info-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/staff-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MPImRdUyUknqT8TP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search/shop/member' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z2pNEDv8jfNbw1IP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications/product-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.new-product-notification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notifications/read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.read',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shop-rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::azTlIhMtgPcB319n',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/friend-lists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BwCgfrx5ooIpALUF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/friend-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7dWk3D9z3hiomknM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invite-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IKYNciLp0uYYTknG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/subscribe-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RfnKH9XvlfJ79ejC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/subscribe-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GaUUKkrexaXjgA1m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/rename-nickname' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mndkJddS1YxnI1V2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wishlists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vTLnzvYrktF9RIYH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my-shops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KLvEFX2SPJSEhj6r',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dQ2sKKsqmC7uF7ii',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my-shops/self' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6G9zSG7WXUUzSpZp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JgA42ZaZvsnCpaIp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/brands/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bHotV8PbMy7t9iVy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/colors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UJjQfkGdz35B3OkI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sizes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mFjRv7Hg8l3LBbjA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/weights' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ggkFw3anS0Dnzh2Z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DdQEmKhGCWkbROAO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H19pJkXS9ScbKLK1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/product-tutorial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dUQte455xRIlDSMB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T44viyTSIKwDdxSx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories/base' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GssjNKsYxIk8blwu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OCX294cBpuiYLTTh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lKGbA5DaWgI5Vl0D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders/last-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1vhK6VVsLA8gUn6H',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders/shipping-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DPIjyilbo5JGegpw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders/self' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CjOnw4qkH3Krny1y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0tj81F1IX6ZuWwEV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/interaction/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qyQzYFQYEkR7lxg6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LGFfThUrHwsxlDYR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/storage-link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wweeo0oc2RXmkcv8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nac5jcnw5kmFXrK3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TMFq11Rfb371r6CR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/otp-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'otp-verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'verified.otp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::djiGFSA229r1TcWz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::22l2jgklIq8a4Y2z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aygoXZByl0QRdS5Q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.resend',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/super-admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.super-admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.super-admin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/super-admin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.super-admin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/vendor-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.users.vendor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.admin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/admin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.admin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/vendor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.vendor.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.vendor.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/vendor/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.vendor.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/profile/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.profile.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/settings/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/settings/appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.appearance.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.appearance.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/settings/mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.mail.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.mail.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/settings/socialite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.socialite.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.settings.socialite.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.menus.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.menus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/menus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.menus.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/tutorial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.tutorial.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.tutorial.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/tutorial/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.tutorial.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.cities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.cities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/cities/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.cities.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/areas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.areas.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.areas.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/areas/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.areas.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/thanas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.thanas.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.thanas.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/thanas/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.thanas.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/markets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.markets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.markets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/markets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.markets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/floors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.floors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.floors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/floors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.floors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shoptypes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shoptypes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shoptypes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shoptypes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shoptypes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shops.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shops.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/shops/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shops.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.brand.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.brand.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/brand/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.brand.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/colors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.colors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.colors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/colors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.colors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/size' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.size.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.size.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/size/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.size.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/weights' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.weights.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.weights.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/weights/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.weights.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.topics.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.topics.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/topics/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.topics.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.videos.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.templates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/stories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.stories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/real_experiences' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.real_experiences.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/memes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.memes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.comments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backend/comments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.comments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/api/(?|areas\\-by\\-city/([^/]++)(*:139)|s(?|earch(?|allheader/([^/]++)/([^/]++)(*:186)|/shoping\\-friend/([^/]++)(*:219))|ubscribe\\-c(?|ount\\-by\\-shop/([^/]++)(*:265)|heck\\-by\\-shop\\-customer/([^/]++)(*:306))|h(?|ops/(?|all\\-shops\\-by\\-market/([^/]++)(*:357)|([^/]++)(*:373)|shops\\-by\\-market\\-(?|by\\-floor/([^/]++)(*:421)|floor/([^/]++)/([^/]++)(*:452)))|ares/(?|([^/]++)(*:478)|create(*:492)))|taff(?|s/([^/]++)(*:519)|/(?|([^/]++)(*:539)|update/([^/]++)(*:562))))|c(?|ities/([^/]++)/markets(*:599)|omments/(?|([^/]++)(*:626)|create(*:640)|([^/]++)/update(*:663)|delete/([^/]++)(*:686)))|m(?|arkets/(?|all\\-market\\-by\\-(?|city/([^/]++)(*:743)|area/([^/]++)(*:764))|top\\-market\\-by\\-(?|city/([^/]++)(*:806)|area/([^/]++)(*:827))|([^/]++)(*:844))|y\\-shops/(?|([^/]++)(?|/edit(*:881)|(*:889))|update/([^/]++)(*:913)|delete/([^/]++)(*:936)|pending/([^/]++)(*:960)|media\\-image/([^/]++)(*:989)))|rate\\-count\\-by\\-shop/([^/]++)(*:1029)|videos/([^/]++)(?|(*:1056)|/update(*:1072))|products(?|\\-by\\-shop/(?|([^/]++)(*:1115)|category/([^/]++)/([^/]++)(*:1150))|/(?|([^/]++)(*:1172)|s(?|imilar\\-product/([^/]++)(*:1209)|elf/([^/]++)(*:1230))|productadd(*:1250)|([^/]++)/edit(*:1272)|update/([^/]++)(*:1296)|delete/([^/]++)(*:1320)|similar\\-by\\-product/([^/]++)/([^/]++)(*:1367)|remove\\-image\\-gallery/([^/]++)(*:1407)|add\\-to\\-f(?|lash(*:1433)|estival(*:1449))))|topics/category/([^/]++)(*:1485)|notify\\-subscribers/([^/]++)(*:1522)|unsubscribe/([^/]++)(*:1551)|wishlist(?|\\-(?|request/([^/]++)(*:1592)|check\\-by\\-product/([^/]++)(*:1628))|/([^/]++)(*:1647))|orders/(?|self/([^/]++)(*:1680)|([^/]++)(*:1697)|s(?|hop/([^/]++)(?|(*:1725)|/sales\\-report(*:1748))|t(?|atus\\-update/([^/]++)/([^/]++)(*:1792)|oreOrder(*:1809))))|interaction/([^/]++)/update(*:1848)|likes/(?|([^/]++)(*:1874)|create(*:1889)|delete/([^/]++)(*:1913)))|/password/reset/([^/]++)(*:1948)|/email/verify/([^/]++)/([^/]++)(*:1988)|/backend/(?|roles/([^/]++)(?|(*:2026)|/edit(*:2040)|(*:2049))|s(?|uper\\-admin/([^/]++)(?|(*:2086)|/edit(*:2100)|(*:2109))|hop(?|types/([^/]++)(?|(*:2142)|/edit(*:2156)|(*:2165))|s/(?|([^/]++)(?|(*:2191)|/edit(*:2205)|(*:2214))|status\\-update/([^/]++)(*:2247)))|ize/([^/]++)(?|(*:2273)|/edit(*:2287)|(*:2296)))|users/([^/]++)/(?|status(*:2331)|publish(*:2347)|block(*:2361))|a(?|dmin/([^/]++)(?|(*:2391)|/edit(*:2405)|(*:2414))|reas/([^/]++)(?|(*:2440)|/edit(*:2454)|(*:2463)))|v(?|endor/([^/]++)(?|(*:2495)|/(?|edit(*:2512)|block(*:2526))|(*:2536))|ideos/([^/]++)(*:2560))|m(?|e(?|nus/([^/]++)(?|(*:2593)|/edit(*:2607)|(*:2616))|dia\\-image/([^/]++)(*:2645))|arkets/([^/]++)(?|(*:2673)|/edit(*:2687)|(*:2696)))|t(?|utorial/([^/]++)(?|(*:2730)|/edit(*:2744)|(*:2753))|hanas/([^/]++)(?|(*:2780)|/edit(*:2794)|(*:2803))|opics/([^/]++)(?|(*:2830)|/edit(*:2844)|(*:2853)))|c(?|ities/([^/]++)(?|(*:2885)|/edit(*:2899)|(*:2908))|ategory/([^/]++)(?|(*:2937)|/edit(*:2951)|(*:2960))|o(?|lors/([^/]++)(?|(*:2990)|/edit(*:3004)|(*:3013))|mments/(?|([^/]++)(?|(*:3044)|/edit(*:3058)|(*:3067))|update\\-status(*:3091))))|getCities/([^/]++)(*:3121)|floors/([^/]++)(?|(*:3148)|/edit(*:3162)|(*:3171))|brand/([^/]++)(?|(*:3198)|/edit(*:3212)|(*:3221))|weights/([^/]++)(?|(*:3250)|/edit(*:3264)|(*:3273))|products/([^/]++)(?|(*:3303)|/edit(*:3317)|(*:3326))|orders/([^/]++)(?|(*:3354)|/edit(*:3368)|(*:3377))|interactions/([^/]++)(*:3408)))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SvyYiqy8dFGoE7SU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8uU1dKL56w0MVtZg',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t32wt6ycV1BTsdZB',
          ),
          1 => 
          array (
            0 => 'keyword',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BQLwgwMI1WryIzEL',
          ),
          1 => 
          array (
            0 => 'shopId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F0Rm5omAZL5M8ZPn',
          ),
          1 => 
          array (
            0 => 'shopId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eYVRnXz0VayMTu9g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kzFU1wKMZhTEGvWj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aIpqZ2fPGO7SnqFJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B5AG6c7kp78eJrTi',
          ),
          1 => 
          array (
            0 => 'marketId',
            1 => 'floorId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0KslR0LlPvMLnz8h',
          ),
          1 => 
          array (
            0 => 'interaction_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::heT12wqjYfPrTTW4',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bxKgS32dQk4GOqLx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c7QjG4rGXCyW7iUx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::stNEJT2GdfkhWsNl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZDLrTgv8PbnNIOkC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XuSzfVcD6yws4Eki',
          ),
          1 => 
          array (
            0 => 'interaction_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b7HGvhM6jGjFuYVC',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::egt4NDOGG23BeZ7e',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rACxCf6KdzCCamMm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3e3KRMCSNYcLdL5K',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      764 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uGMiZIuBVczjhdJD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      806 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yc2oRdZ1RHFAX3Wg',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M34cAnP1x0Fm0KFM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oCJnkKj4PM2fuFba',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dGMbLDxJ9WC9Cs7Y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4wjYPMjiWypvbt8v',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DoNQUOWkl8K97lPG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1jatcRHQ0dOqKaja',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EbYi0dr38TBIEL97',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OYKQnpT6AXBTLq0R',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0hAc8W6WQHSHt29M',
          ),
          1 => 
          array (
            0 => 'shopId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QYBdImaUbzPd4fJp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1072 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S5OSnANRigyyWHEp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E1BaEzNxLQ84Yvsn',
          ),
          1 => 
          array (
            0 => 'shop_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ulC5afWqhtxgkSwy',
          ),
          1 => 
          array (
            0 => 'shop_id',
            1 => 'cate_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qDkqn3O7M0gTBWHA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yd5eZYZWStu04oFA',
          ),
          1 => 
          array (
            0 => 'shopId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::idVXVJevuPd8LegV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p8Qct8Gt0Nb0BPJW',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lfmPVCgC6r9MoAz2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SqyR4S7bRJUKQxCk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qvNfWEV6dMPaOrmi',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EB8hMIHAvVSY0M8G',
          ),
          1 => 
          array (
            0 => 'productId',
            1 => 'shopId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ayD4AgR1QsgSW6Bh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sZ9B272uyMMgVcUg',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LoXRCcS5mdJIkLsa',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LQXUTqlUYPqDaMoE',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EVKhl7tttIiJZBMc',
          ),
          1 => 
          array (
            0 => 'shopId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::27Vt6W8FrxYq5hqx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NmsuU2be7qFy1qZr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9P5Hzjf20bOAn1II',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1647 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hmWvDSnfXRxv98bB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YETD2WhdcxJjRFsk',
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zPh4CvsqxRQJeRDV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IAuHd2gk7ZlMToNm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0N2hOaOlETpDMCeI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7wTxGOuSR3AuvIT8',
          ),
          1 => 
          array (
            0 => 'status',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9pcgS84QiMWv2FkW',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U8curAY23Ye1hTXE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0KyqoltDlbQuFLWr',
          ),
          1 => 
          array (
            0 => 'interaction_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X02GmQqbBX3WoawI',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QVOUR0D54SKNYm2Z',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.super-admin.show',
          ),
          1 => 
          array (
            0 => 'super_admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.super-admin.edit',
          ),
          1 => 
          array (
            0 => 'super_admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.super-admin.update',
          ),
          1 => 
          array (
            0 => 'super_admin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.super-admin.destroy',
          ),
          1 => 
          array (
            0 => 'super_admin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shoptypes.show',
          ),
          1 => 
          array (
            0 => 'shoptype',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shoptypes.edit',
          ),
          1 => 
          array (
            0 => 'shoptype',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shoptypes.update',
          ),
          1 => 
          array (
            0 => 'shoptype',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shoptypes.destroy',
          ),
          1 => 
          array (
            0 => 'shoptype',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shops.show',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shops.edit',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shops.update',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shops.destroy',
          ),
          1 => 
          array (
            0 => 'shop',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shop.status-update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.size.show',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.size.edit',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.size.update',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.size.destroy',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.owner.status',
          ),
          1 => 
          array (
            0 => 'ownerID',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.users.publish',
          ),
          1 => 
          array (
            0 => 'userID',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.users.blocked',
          ),
          1 => 
          array (
            0 => 'userID',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.admin.show',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.admin.edit',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.admin.update',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.admin.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.areas.show',
          ),
          1 => 
          array (
            0 => 'area',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.areas.edit',
          ),
          1 => 
          array (
            0 => 'area',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.areas.update',
          ),
          1 => 
          array (
            0 => 'area',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.areas.destroy',
          ),
          1 => 
          array (
            0 => 'area',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.vendor.show',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.vendor.edit',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.vendor.block',
          ),
          1 => 
          array (
            0 => 'vendorID',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.vendor.update',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.vendor.destroy',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.videos.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.menus.show',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.menus.edit',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2616 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.menus.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.menus.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.shopMedia.remove',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.markets.show',
          ),
          1 => 
          array (
            0 => 'market',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.markets.edit',
          ),
          1 => 
          array (
            0 => 'market',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.markets.update',
          ),
          1 => 
          array (
            0 => 'market',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.markets.destroy',
          ),
          1 => 
          array (
            0 => 'market',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.tutorial.show',
          ),
          1 => 
          array (
            0 => 'tutorial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.tutorial.edit',
          ),
          1 => 
          array (
            0 => 'tutorial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.tutorial.update',
          ),
          1 => 
          array (
            0 => 'tutorial',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.tutorial.destroy',
          ),
          1 => 
          array (
            0 => 'tutorial',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.thanas.show',
          ),
          1 => 
          array (
            0 => 'thana',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2794 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.thanas.edit',
          ),
          1 => 
          array (
            0 => 'thana',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2803 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.thanas.update',
          ),
          1 => 
          array (
            0 => 'thana',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.thanas.destroy',
          ),
          1 => 
          array (
            0 => 'thana',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2830 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.topics.show',
          ),
          1 => 
          array (
            0 => 'topic',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.topics.edit',
          ),
          1 => 
          array (
            0 => 'topic',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2853 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.topics.update',
          ),
          1 => 
          array (
            0 => 'topic',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.topics.destroy',
          ),
          1 => 
          array (
            0 => 'topic',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.cities.show',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2899 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.cities.edit',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.cities.update',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.cities.destroy',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.category.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.colors.show',
          ),
          1 => 
          array (
            0 => 'color',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.colors.edit',
          ),
          1 => 
          array (
            0 => 'color',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3013 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.colors.update',
          ),
          1 => 
          array (
            0 => 'color',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.colors.destroy',
          ),
          1 => 
          array (
            0 => 'color',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3044 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.comments.show',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.comments.edit',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.comments.update',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.comments.destroy',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.comments.statusUpdate',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.floors.show',
          ),
          1 => 
          array (
            0 => 'floor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.floors.edit',
          ),
          1 => 
          array (
            0 => 'floor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.floors.update',
          ),
          1 => 
          array (
            0 => 'floor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.floors.destroy',
          ),
          1 => 
          array (
            0 => 'floor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.brand.show',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.brand.edit',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.brand.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.brand.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.weights.show',
          ),
          1 => 
          array (
            0 => 'weight',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.weights.edit',
          ),
          1 => 
          array (
            0 => 'weight',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.weights.update',
          ),
          1 => 
          array (
            0 => 'weight',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.weights.destroy',
          ),
          1 => 
          array (
            0 => 'weight',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.products.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3368 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.orders.edit',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'backend.orders.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backend.interactions.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gy7T8TPuUJbQZ8TP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserManagement\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\API\\UserManagement\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gy7T8TPuUJbQZ8TP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0EPvieBjwp9OEvRZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserManagement\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\API\\UserManagement\\AuthController@register',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0EPvieBjwp9OEvRZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lRkdAQNHKuRuLWzh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserManagement\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\API\\UserManagement\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lRkdAQNHKuRuLWzh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IZkJySBvPBqzBqyt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\General\\Menu\\AppMenuController@index',
        'controller' => 'App\\Http\\Controllers\\API\\General\\Menu\\AppMenuController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IZkJySBvPBqzBqyt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jH0xyGqhV2FIEuio' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\AreaController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\AreaController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jH0xyGqhV2FIEuio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SvyYiqy8dFGoE7SU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/areas-by-city/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\AreaController@areaByCity',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\AreaController@areaByCity',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SvyYiqy8dFGoE7SU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8uU1dKL56w0MVtZg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/searchallheader/{type}/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchController@searchAllHeder',
        'controller' => 'App\\Http\\Controllers\\API\\SearchController@searchAllHeder',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8uU1dKL56w0MVtZg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AvDrUglYT1cM0Mjs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\CityController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\CityController@index',
        'namespace' => 'City',
        'prefix' => 'api/cities',
        'where' => 
        array (
        ),
        'as' => 'generated::AvDrUglYT1cM0Mjs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZDLrTgv8PbnNIOkC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cities/{id}/markets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\CityController@cityMarkets',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\CityController@cityMarkets',
        'namespace' => 'City',
        'prefix' => 'api/cities',
        'where' => 
        array (
        ),
        'as' => 'generated::ZDLrTgv8PbnNIOkC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2pewKDMA1LQK91bo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/markets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\MarketController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\MarketController@index',
        'namespace' => 'Market',
        'prefix' => 'api/markets',
        'where' => 
        array (
        ),
        'as' => 'generated::2pewKDMA1LQK91bo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3e3KRMCSNYcLdL5K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/markets/all-market-by-city/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\MarketController@allMarketsByCity',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\MarketController@allMarketsByCity',
        'namespace' => 'Market',
        'prefix' => 'api/markets',
        'where' => 
        array (
        ),
        'as' => 'generated::3e3KRMCSNYcLdL5K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Yc2oRdZ1RHFAX3Wg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/markets/top-market-by-city/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\MarketController@topMarketsByCity',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\MarketController@topMarketsByCity',
        'namespace' => 'Market',
        'prefix' => 'api/markets',
        'where' => 
        array (
        ),
        'as' => 'generated::Yc2oRdZ1RHFAX3Wg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uGMiZIuBVczjhdJD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/markets/all-market-by-area/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\MarketController@allMarketsByArea',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\MarketController@allMarketsByArea',
        'namespace' => 'Market',
        'prefix' => 'api/markets',
        'where' => 
        array (
        ),
        'as' => 'generated::uGMiZIuBVczjhdJD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::M34cAnP1x0Fm0KFM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/markets/top-market-by-area/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\MarketController@topMarketsByArea',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\MarketController@topMarketsByArea',
        'namespace' => 'Market',
        'prefix' => 'api/markets',
        'where' => 
        array (
        ),
        'as' => 'generated::M34cAnP1x0Fm0KFM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oCJnkKj4PM2fuFba' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/markets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\MarketController@singleMarket',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\MarketController@singleMarket',
        'namespace' => 'Market',
        'prefix' => 'api/markets',
        'where' => 
        array (
        ),
        'as' => 'generated::oCJnkKj4PM2fuFba',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BQLwgwMI1WryIzEL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/subscribe-count-by-shop/{shopId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@countSubscribersByShopID',
        'controller' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@countSubscribersByShopID',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BQLwgwMI1WryIzEL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0hAc8W6WQHSHt29M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/rate-count-by-shop/{shopId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Rating\\ShopRatingController@countRatingByShopID',
        'controller' => 'App\\Http\\Controllers\\API\\Rating\\ShopRatingController@countRatingByShopID',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0hAc8W6WQHSHt29M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Zu1qd7s9lG5SjRUR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@videos',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@videos',
        'namespace' => 'Video',
        'prefix' => 'api/videos',
        'where' => 
        array (
        ),
        'as' => 'generated::Zu1qd7s9lG5SjRUR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QYBdImaUbzPd4fJp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/videos/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@showVideo',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@showVideo',
        'namespace' => 'Video',
        'prefix' => 'api/videos',
        'where' => 
        array (
        ),
        'as' => 'generated::QYBdImaUbzPd4fJp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::THIIFzIepLQW2Xdl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/floors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Location\\FloorController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Location\\FloorController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::THIIFzIepLQW2Xdl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Y7A3lTPIOGYbiKsl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/base/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\General\\Category\\CategoryController@baseCategories',
        'controller' => 'App\\Http\\Controllers\\API\\General\\Category\\CategoryController@baseCategories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Y7A3lTPIOGYbiKsl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zAV2ZKRrvcicVGnD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/shop-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopTypeController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopTypeController@index',
        'namespace' => 'Shop',
        'prefix' => 'api/shops',
        'where' => 
        array (
        ),
        'as' => 'generated::zAV2ZKRrvcicVGnD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eYVRnXz0VayMTu9g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/all-shops-by-market/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@shopByMarket',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@shopByMarket',
        'namespace' => 'Shop',
        'prefix' => 'api/shops',
        'where' => 
        array (
        ),
        'as' => 'generated::eYVRnXz0VayMTu9g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kzFU1wKMZhTEGvWj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@show',
        'namespace' => 'Shop',
        'prefix' => 'api/shops',
        'where' => 
        array (
        ),
        'as' => 'generated::kzFU1wKMZhTEGvWj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aIpqZ2fPGO7SnqFJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/shops-by-market-by-floor/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@getShopCountByMarketFloor',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@getShopCountByMarketFloor',
        'namespace' => 'Shop',
        'prefix' => 'api/shops',
        'where' => 
        array (
        ),
        'as' => 'generated::aIpqZ2fPGO7SnqFJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::I2A14nqSWxKuw1kh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/shops/search/shops-by-market',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@searchShopByMarket',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@searchShopByMarket',
        'namespace' => 'Shop',
        'prefix' => 'api/shops',
        'where' => 
        array (
        ),
        'as' => 'generated::I2A14nqSWxKuw1kh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::B5AG6c7kp78eJrTi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shops/shops-by-market-floor/{marketId}/{floorId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@shopByMarketFloor',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@shopByMarketFloor',
        'namespace' => 'Shop',
        'prefix' => 'api/shops',
        'where' => 
        array (
        ),
        'as' => 'generated::B5AG6c7kp78eJrTi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::E1BaEzNxLQ84Yvsn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'api/products-by-shop/{shop_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@productsByShop',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@productsByShop',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::E1BaEzNxLQ84Yvsn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ulC5afWqhtxgkSwy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'api/products-by-shop/category/{shop_id}/{cate_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@productsByShopByCategory',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@productsByShopByCategory',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ulC5afWqhtxgkSwy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Uh2uCeTqpYVsZuGi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@searchProducts',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@searchProducts',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Uh2uCeTqpYVsZuGi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qDkqn3O7M0gTBWHA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qDkqn3O7M0gTBWHA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yd5eZYZWStu04oFA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/similar-product/{shopId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@similarProduct',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@similarProduct',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yd5eZYZWStu04oFA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KnPstgX30Sn3EUIl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/flash-sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\FlashsaleController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\FlashsaleController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KnPstgX30Sn3EUIl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::do1ZJm1GnYowy1gJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/festival-sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\FestivalSaleController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\FestivalSaleController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::do1ZJm1GnYowy1gJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LQCo3elHeyinJ1is' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionTopicController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionTopicController@index',
        'namespace' => 'Topic',
        'prefix' => 'api/topics',
        'where' => 
        array (
        ),
        'as' => 'generated::LQCo3elHeyinJ1is',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LQXUTqlUYPqDaMoE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/topics/category/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionTopicController@getAllByCategoryID',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionTopicController@getAllByCategoryID',
        'namespace' => 'Topic',
        'prefix' => 'api/topics',
        'where' => 
        array (
        ),
        'as' => 'generated::LQXUTqlUYPqDaMoE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hMipF7ZWcKB3Wgl6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserManagement\\AuthController@getAuthUser',
        'controller' => 'App\\Http\\Controllers\\API\\UserManagement\\AuthController@getAuthUser',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hMipF7ZWcKB3Wgl6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user-info-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserManagement\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\API\\UserManagement\\ProfileController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserManagement\\ProfileController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\API\\UserManagement\\ProfileController@updatePassword',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'profile.password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bxKgS32dQk4GOqLx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/staffs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bxKgS32dQk4GOqLx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MPImRdUyUknqT8TP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/staff-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MPImRdUyUknqT8TP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::c7QjG4rGXCyW7iUx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/staff/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::c7QjG4rGXCyW7iUx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::stNEJT2GdfkhWsNl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/staff/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::stNEJT2GdfkhWsNl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Z2pNEDv8jfNbw1IP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search/shop/member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@searchMember',
        'controller' => 'App\\Http\\Controllers\\Api\\UserManagement\\VendorController@searchMember',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Z2pNEDv8jfNbw1IP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'notification.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => 'api/notifications',
        'where' => 
        array (
        ),
        'as' => 'notification.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'notification.new-product-notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notifications/product-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@productNotificationByID',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@productNotificationByID',
        'namespace' => NULL,
        'prefix' => 'api/notifications',
        'where' => 
        array (
        ),
        'as' => 'notification.new-product-notification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'notification.read' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/notifications/read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\NotificationController@readNotification',
        'controller' => 'App\\Http\\Controllers\\API\\NotificationController@readNotification',
        'namespace' => NULL,
        'prefix' => 'api/notifications',
        'where' => 
        array (
        ),
        'as' => 'notification.read',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::azTlIhMtgPcB319n' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/shop-rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Rating\\ShopRatingController@sentShopRating',
        'controller' => 'App\\Http\\Controllers\\API\\Rating\\ShopRatingController@sentShopRating',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::azTlIhMtgPcB319n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BwCgfrx5ooIpALUF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/friend-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopingFriend\\ShopingFriendController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ShopingFriend\\ShopingFriendController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BwCgfrx5ooIpALUF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7dWk3D9z3hiomknM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/friend-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopingFriend\\ShopingFriendController@sentShopingFriendRequest',
        'controller' => 'App\\Http\\Controllers\\API\\ShopingFriend\\ShopingFriendController@sentShopingFriendRequest',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7dWk3D9z3hiomknM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IKYNciLp0uYYTknG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invite-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopingFriend\\ShopingFriendController@sentShopingFriendInvitation',
        'controller' => 'App\\Http\\Controllers\\API\\ShopingFriend\\ShopingFriendController@sentShopingFriendInvitation',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IKYNciLp0uYYTknG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::t32wt6ycV1BTsdZB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search/shoping-friend/{keyword}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopingFriend\\ShopingFriendController@shopingFriendSearch',
        'controller' => 'App\\Http\\Controllers\\API\\ShopingFriend\\ShopingFriendController@shopingFriendSearch',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::t32wt6ycV1BTsdZB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RfnKH9XvlfJ79ejC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/subscribe-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RfnKH9XvlfJ79ejC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GaUUKkrexaXjgA1m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/subscribe-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@sentShopSubscribeRequest',
        'controller' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@sentShopSubscribeRequest',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GaUUKkrexaXjgA1m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mndkJddS1YxnI1V2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/rename-nickname',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@renameNickname',
        'controller' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@renameNickname',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mndkJddS1YxnI1V2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::F0Rm5omAZL5M8ZPn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/subscribe-check-by-shop-customer/{shopId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@checkByShop',
        'controller' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@checkByShop',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::F0Rm5omAZL5M8ZPn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EVKhl7tttIiJZBMc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notify-subscribers/{shopId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@notifySubscribers',
        'controller' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@notifySubscribers',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EVKhl7tttIiJZBMc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::27Vt6W8FrxYq5hqx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unsubscribe/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@unsubscribe',
        'controller' => 'App\\Http\\Controllers\\API\\ShopSubscribe\\ShopingSubscribeController@unsubscribe',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::27Vt6W8FrxYq5hqx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NmsuU2be7qFy1qZr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wishlist-request/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Wishlist\\WishlistController@sentWishlistRequest',
        'controller' => 'App\\Http\\Controllers\\API\\Wishlist\\WishlistController@sentWishlistRequest',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NmsuU2be7qFy1qZr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9P5Hzjf20bOAn1II' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wishlist-check-by-product/{productId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Wishlist\\WishlistController@checkWishList',
        'controller' => 'App\\Http\\Controllers\\API\\Wishlist\\WishlistController@checkWishList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9P5Hzjf20bOAn1II',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vTLnzvYrktF9RIYH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wishlists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Wishlist\\WishlistController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Wishlist\\WishlistController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vTLnzvYrktF9RIYH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hmWvDSnfXRxv98bB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wishlist/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Wishlist\\WishlistController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Wishlist\\WishlistController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hmWvDSnfXRxv98bB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KLvEFX2SPJSEhj6r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@index',
        'namespace' => 'Shop',
        'prefix' => 'api/my-shops',
        'where' => 
        array (
        ),
        'as' => 'generated::KLvEFX2SPJSEhj6r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dQ2sKKsqmC7uF7ii' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my-shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@store',
        'namespace' => 'Shop',
        'prefix' => 'api/my-shops',
        'where' => 
        array (
        ),
        'as' => 'generated::dQ2sKKsqmC7uF7ii',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dGMbLDxJ9WC9Cs7Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-shops/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@edit',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@edit',
        'namespace' => 'Shop',
        'prefix' => 'api/my-shops',
        'where' => 
        array (
        ),
        'as' => 'generated::dGMbLDxJ9WC9Cs7Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6G9zSG7WXUUzSpZp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-shops/self',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@myShops',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@myShops',
        'namespace' => 'Shop',
        'prefix' => 'api/my-shops',
        'where' => 
        array (
        ),
        'as' => 'generated::6G9zSG7WXUUzSpZp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4wjYPMjiWypvbt8v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-shops/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@myShop',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@myShop',
        'namespace' => 'Shop',
        'prefix' => 'api/my-shops',
        'where' => 
        array (
        ),
        'as' => 'generated::4wjYPMjiWypvbt8v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DoNQUOWkl8K97lPG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my-shops/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@update',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@update',
        'namespace' => 'Shop',
        'prefix' => 'api/my-shops',
        'where' => 
        array (
        ),
        'as' => 'generated::DoNQUOWkl8K97lPG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1jatcRHQ0dOqKaja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-shops/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@destroy',
        'namespace' => 'Shop',
        'prefix' => 'api/my-shops',
        'where' => 
        array (
        ),
        'as' => 'generated::1jatcRHQ0dOqKaja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EbYi0dr38TBIEL97' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-shops/pending/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@checkApproveShop',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@checkApproveShop',
        'namespace' => 'Shop',
        'prefix' => 'api/my-shops',
        'where' => 
        array (
        ),
        'as' => 'generated::EbYi0dr38TBIEL97',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OYKQnpT6AXBTLq0R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-shops/media-image/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@removeShopMedia',
        'controller' => 'App\\Http\\Controllers\\API\\Shop\\ShopController@removeShopMedia',
        'namespace' => 'Shop',
        'prefix' => 'api/my-shops',
        'where' => 
        array (
        ),
        'as' => 'generated::OYKQnpT6AXBTLq0R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JgA42ZaZvsnCpaIp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\General\\Brand\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\API\\General\\Brand\\BrandController@index',
        'namespace' => 'Brand',
        'prefix' => 'api/brands',
        'where' => 
        array (
        ),
        'as' => 'generated::JgA42ZaZvsnCpaIp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bHotV8PbMy7t9iVy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/brands/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\General\\Brand\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\API\\General\\Brand\\BrandController@store',
        'namespace' => 'Brand',
        'prefix' => 'api/brands',
        'where' => 
        array (
        ),
        'as' => 'generated::bHotV8PbMy7t9iVy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UJjQfkGdz35B3OkI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/colors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\Base\\ColorController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\Base\\ColorController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UJjQfkGdz35B3OkI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mFjRv7Hg8l3LBbjA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sizes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\Base\\SizeController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\Base\\SizeController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mFjRv7Hg8l3LBbjA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ggkFw3anS0Dnzh2Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/weights',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\Base\\WeightController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\Base\\WeightController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ggkFw3anS0Dnzh2Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DdQEmKhGCWkbROAO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\Base\\UnitController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\Base\\UnitController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DdQEmKhGCWkbROAO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::H19pJkXS9ScbKLK1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@index',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::H19pJkXS9ScbKLK1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::idVXVJevuPd8LegV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/self/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@selfProduct',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@selfProduct',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::idVXVJevuPd8LegV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p8Qct8Gt0Nb0BPJW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/products/productadd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@store',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::p8Qct8Gt0Nb0BPJW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lfmPVCgC6r9MoAz2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@edit',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::lfmPVCgC6r9MoAz2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SqyR4S7bRJUKQxCk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/products/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@update',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::SqyR4S7bRJUKQxCk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qvNfWEV6dMPaOrmi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@destroy',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::qvNfWEV6dMPaOrmi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EB8hMIHAvVSY0M8G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/similar-by-product/{productId}/{shopId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@similarProductByProduct',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@similarProductByProduct',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::EB8hMIHAvVSY0M8G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ayD4AgR1QsgSW6Bh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/remove-image-gallery/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\ProductController@productImageGalleryRemove',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\ProductController@productImageGalleryRemove',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::ayD4AgR1QsgSW6Bh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sZ9B272uyMMgVcUg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/products/add-to-flash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\FlashsaleController@addToFlashSale',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\FlashsaleController@addToFlashSale',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::sZ9B272uyMMgVcUg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LoXRCcS5mdJIkLsa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/products/add-to-festival',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Product\\FestivalSaleController@addToFestivalSale',
        'controller' => 'App\\Http\\Controllers\\API\\Product\\FestivalSaleController@addToFestivalSale',
        'namespace' => 'Product',
        'prefix' => 'api/products',
        'where' => 
        array (
        ),
        'as' => 'generated::LoXRCcS5mdJIkLsa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dUQte455xRIlDSMB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product-tutorial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\General\\TutorialController@index',
        'controller' => 'App\\Http\\Controllers\\API\\General\\TutorialController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dUQte455xRIlDSMB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T44viyTSIKwDdxSx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\General\\Category\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\API\\General\\Category\\CategoryController@index',
        'namespace' => 'Category',
        'prefix' => 'api/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::T44viyTSIKwDdxSx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GssjNKsYxIk8blwu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/base',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\General\\Category\\CategoryController@baseCategories',
        'controller' => 'App\\Http\\Controllers\\API\\General\\Category\\CategoryController@baseCategories',
        'namespace' => 'Category',
        'prefix' => 'api/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::GssjNKsYxIk8blwu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OCX294cBpuiYLTTh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\General\\Category\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\API\\General\\Category\\CategoryController@store',
        'namespace' => 'Category',
        'prefix' => 'api/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::OCX294cBpuiYLTTh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lKGbA5DaWgI5Vl0D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@index',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::lKGbA5DaWgI5Vl0D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1vhK6VVsLA8gUn6H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/last-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@lastOrder',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@lastOrder',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::1vhK6VVsLA8gUn6H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DPIjyilbo5JGegpw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/shipping-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@shippingAddress',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@shippingAddress',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::DPIjyilbo5JGegpw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CjOnw4qkH3Krny1y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/self',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@selfOrder',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@selfOrder',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::CjOnw4qkH3Krny1y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YETD2WhdcxJjRFsk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/self/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@selfOrderBystatus',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@selfOrderBystatus',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::YETD2WhdcxJjRFsk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zPh4CvsqxRQJeRDV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@show',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::zPh4CvsqxRQJeRDV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IAuHd2gk7ZlMToNm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/shop/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@ordersByShop',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@ordersByShop',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::IAuHd2gk7ZlMToNm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0N2hOaOlETpDMCeI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/shop/{id}/sales-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@salesReport',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@salesReport',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::0N2hOaOlETpDMCeI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7wTxGOuSR3AuvIT8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/status-update/{status}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@statusUpdate',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@statusUpdate',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::7wTxGOuSR3AuvIT8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9pcgS84QiMWv2FkW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/orders/storeOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Order\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Order\\OrderController@store',
        'namespace' => 'Order',
        'prefix' => 'api/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::9pcgS84QiMWv2FkW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0tj81F1IX6ZuWwEV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@templates',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@templates',
        'namespace' => 'Template',
        'prefix' => 'api/templates',
        'where' => 
        array (
        ),
        'as' => 'generated::0tj81F1IX6ZuWwEV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::S5OSnANRigyyWHEp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/videos/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@updateVideo',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@updateVideo',
        'namespace' => 'Video',
        'prefix' => 'api/videos',
        'where' => 
        array (
        ),
        'as' => 'generated::S5OSnANRigyyWHEp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qyQzYFQYEkR7lxg6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/interaction/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@store',
        'namespace' => 'interaction',
        'prefix' => 'api/interaction',
        'where' => 
        array (
        ),
        'as' => 'generated::qyQzYFQYEkR7lxg6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U8curAY23Ye1hTXE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/interaction/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@update',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\InteractionController@update',
        'namespace' => 'interaction',
        'prefix' => 'api/interaction',
        'where' => 
        array (
        ),
        'as' => 'generated::U8curAY23Ye1hTXE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LGFfThUrHwsxlDYR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@index',
        'namespace' => 'Comment',
        'prefix' => 'api/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::LGFfThUrHwsxlDYR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XuSzfVcD6yws4Eki' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/comments/{interaction_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@show',
        'namespace' => 'Comment',
        'prefix' => 'api/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::XuSzfVcD6yws4Eki',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::b7HGvhM6jGjFuYVC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@store',
        'namespace' => 'Comment',
        'prefix' => 'api/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::b7HGvhM6jGjFuYVC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::egt4NDOGG23BeZ7e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/comments/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@update',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@update',
        'namespace' => 'Comment',
        'prefix' => 'api/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::egt4NDOGG23BeZ7e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rACxCf6KdzCCamMm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/comments/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\CommentController@destroy',
        'namespace' => 'Comment',
        'prefix' => 'api/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::rACxCf6KdzCCamMm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0KyqoltDlbQuFLWr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/likes/{interaction_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\LikeController@getLikes',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\LikeController@getLikes',
        'namespace' => 'Like',
        'prefix' => 'api/likes',
        'where' => 
        array (
        ),
        'as' => 'generated::0KyqoltDlbQuFLWr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::X02GmQqbBX3WoawI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/likes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\LikeController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\LikeController@store',
        'namespace' => 'Like',
        'prefix' => 'api/likes',
        'where' => 
        array (
        ),
        'as' => 'generated::X02GmQqbBX3WoawI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QVOUR0D54SKNYm2Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/likes/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\LikeController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\LikeController@destroy',
        'namespace' => 'Like',
        'prefix' => 'api/likes',
        'where' => 
        array (
        ),
        'as' => 'generated::QVOUR0D54SKNYm2Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0KslR0LlPvMLnz8h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shares/{interaction_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\ShareController@getShares',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\ShareController@getShares',
        'namespace' => 'Share',
        'prefix' => 'api/shares',
        'where' => 
        array (
        ),
        'as' => 'generated::0KslR0LlPvMLnz8h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::heT12wqjYfPrTTW4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/shares/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Interaction\\ShareController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Interaction\\ShareController@store',
        'namespace' => 'Share',
        'prefix' => 'api/shares',
        'where' => 
        array (
        ),
        'as' => 'generated::heT12wqjYfPrTTW4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wweeo0oc2RXmkcv8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storage-link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":462:{@MqYz7Bn6dvBII8SoSTOMa4zcxSUX0FLLdF0GudfxVC4=.a:5:{s:3:"use";a:0:{}s:8:"function";s:249:"function () {
    $targetFolder = $_SERVER[\'DOCUMENT_ROOT\'] . \'/storage/app/public\';
    $linkFolder = $_SERVER[\'DOCUMENT_ROOT\'] . \'/public/storage\';
    \\symlink($targetFolder, $linkFolder);
    echo \'Symlink process successfully completed\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000012f338020000000055701524";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Wweeo0oc2RXmkcv8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nac5jcnw5kmFXrK3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":482:{@ojNiZ9YXubs84nAUYwrNIcf8UnCuPZJlg8hveo98TUs=.a:5:{s:3:"use";a:0:{}s:8:"function";s:269:"function () {
    \\Artisan::call(\'cache:clear\');
    \\Artisan::call(\'config:clear\');
    \\Artisan::call(\'route:clear\');
    \\Artisan::call(\'view:clear\');
    \\Artisan::call(\'config:cache\');
    \\Artisan::call(\'route:cache\');
    return "All cache is cleared";
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000012f3383d0000000055701524";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::nac5jcnw5kmFXrK3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TMFq11Rfb371r6CR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":258:{@tdFB+hSH5h08qz8RNZksNu4RjHCYs5+wut45FEFr/5U=.a:5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000012f338580000000055701524";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::TMFq11Rfb371r6CR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'otp-verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'otp-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'otp-verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verified.otp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'otp-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@otpVerification',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@otpVerification',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verified.otp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::djiGFSA229r1TcWz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::djiGFSA229r1TcWz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::22l2jgklIq8a4Y2z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::22l2jgklIq8a4Y2z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aygoXZByl0QRdS5Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::aygoXZByl0QRdS5Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerificationController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerificationController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerificationController@verify',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerificationController@verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verification.resend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerificationController@resend',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerificationController@resend',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verification.resend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\DashboardController@index',
        'as' => 'backend.dashboard',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.roles.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\RoleController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.roles.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\RoleController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.roles.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\RoleController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.roles.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\RoleController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.roles.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.roles.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\RoleController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.super-admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/super-admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.super-admin.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.super-admin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/super-admin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.super-admin.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.super-admin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/super-admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.super-admin.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.super-admin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/super-admin/{super_admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.super-admin.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.super-admin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/super-admin/{super_admin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.super-admin.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.super-admin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/super-admin/{super_admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.super-admin.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.super-admin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/super-admin/{super_admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.super-admin.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.users.vendor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/vendor-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@vendorList',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@vendorList',
        'as' => 'backend.users.vendor',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.owner.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/users/{ownerID}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@toggleShopOwner',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@toggleShopOwner',
        'as' => 'backend.owner.status',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.users.publish' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/users/{userID}/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@togglePublish',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@togglePublish',
        'as' => 'backend.users.publish',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.users.blocked' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/users/{userID}/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@toggleBlock',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\SuperAdminController@toggleBlock',
        'as' => 'backend.users.blocked',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.admin.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.admin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/admin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.admin.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.admin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.admin.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.admin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.admin.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.admin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/admin/{admin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.admin.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.admin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.admin.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.admin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.admin.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\AdminController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.vendor.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/vendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.vendor.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.vendor.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/vendor/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.vendor.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.vendor.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/vendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.vendor.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.vendor.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/vendor/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.vendor.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.vendor.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/vendor/{vendor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.vendor.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.vendor.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/vendor/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.vendor.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.vendor.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/vendor/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.vendor.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.vendor.block' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/vendor/{vendorID}/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@toggleBlock',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\VendorController@toggleBlock',
        'as' => 'backend.vendor.block',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\ProfileController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\ProfileController@index',
        'as' => 'backend.profile.index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\ProfileController@update',
        'as' => 'backend.profile.update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/profile/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\ProfileController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\ProfileController@changePassword',
        'as' => 'backend.profile.password.change',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.profile.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/profile/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\UserManagement\\ProfileController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Backend\\UserManagement\\ProfileController@updatePassword',
        'as' => 'backend.profile.password.update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SettingController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\SettingController@index',
        'as' => 'backend.settings.index',
        'namespace' => NULL,
        'prefix' => 'backend/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'backend/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SettingController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\SettingController@update',
        'as' => 'backend.settings.update',
        'namespace' => NULL,
        'prefix' => 'backend/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.appearance.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SettingController@appearance',
        'controller' => 'App\\Http\\Controllers\\Backend\\SettingController@appearance',
        'as' => 'backend.settings.appearance.index',
        'namespace' => NULL,
        'prefix' => 'backend/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.appearance.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'backend/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SettingController@updateAppearance',
        'controller' => 'App\\Http\\Controllers\\Backend\\SettingController@updateAppearance',
        'as' => 'backend.settings.appearance.update',
        'namespace' => NULL,
        'prefix' => 'backend/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.mail.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/settings/mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SettingController@mail',
        'controller' => 'App\\Http\\Controllers\\Backend\\SettingController@mail',
        'as' => 'backend.settings.mail.index',
        'namespace' => NULL,
        'prefix' => 'backend/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.mail.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'backend/settings/mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SettingController@updateMailSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\SettingController@updateMailSettings',
        'as' => 'backend.settings.mail.update',
        'namespace' => NULL,
        'prefix' => 'backend/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.socialite.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/settings/socialite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SettingController@socialite',
        'controller' => 'App\\Http\\Controllers\\Backend\\SettingController@socialite',
        'as' => 'backend.settings.socialite.index',
        'namespace' => NULL,
        'prefix' => 'backend/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.settings.socialite.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'backend/settings/socialite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\SettingController@updateSocialiteSettings',
        'controller' => 'App\\Http\\Controllers\\Backend\\SettingController@updateSocialiteSettings',
        'as' => 'backend.settings.socialite.update',
        'namespace' => NULL,
        'prefix' => 'backend/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.menus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.menus.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.menus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.menus.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.menus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.menus.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.menus.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.menus.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.menus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/menus/{menu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.menus.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.menus.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.menus.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.menus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.menus.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Menu\\AppMenuController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.tutorial.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/tutorial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.tutorial.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.tutorial.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/tutorial/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.tutorial.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.tutorial.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/tutorial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.tutorial.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.tutorial.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/tutorial/{tutorial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.tutorial.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.tutorial.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/tutorial/{tutorial}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.tutorial.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.tutorial.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/tutorial/{tutorial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.tutorial.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.tutorial.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/tutorial/{tutorial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.tutorial.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\TutorialController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.cities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.cities.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.cities.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/cities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.cities.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.cities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.cities.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.cities.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.cities.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.cities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/cities/{city}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.cities.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.cities.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.cities.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.cities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.cities.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/getCities/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@getCities',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\CityController@getCities',
        'as' => 'backend.',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.areas.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.areas.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.areas.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/areas/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.areas.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.areas.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.areas.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.areas.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/areas/{area}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.areas.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.areas.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/areas/{area}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.areas.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.areas.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/areas/{area}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.areas.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.areas.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/areas/{area}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.areas.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\AreaController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.thanas.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/thanas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.thanas.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.thanas.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/thanas/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.thanas.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.thanas.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/thanas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.thanas.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.thanas.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/thanas/{thana}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.thanas.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.thanas.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/thanas/{thana}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.thanas.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.thanas.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/thanas/{thana}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.thanas.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.thanas.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/thanas/{thana}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.thanas.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\ThanaController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.markets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/markets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.markets.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.markets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/markets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.markets.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.markets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/markets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.markets.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.markets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/markets/{market}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.markets.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.markets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/markets/{market}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.markets.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.markets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/markets/{market}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.markets.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.markets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/markets/{market}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.markets.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\MarketController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.floors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/floors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.floors.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.floors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/floors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.floors.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.floors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/floors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.floors.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.floors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/floors/{floor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.floors.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.floors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/floors/{floor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.floors.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.floors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/floors/{floor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.floors.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.floors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/floors/{floor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.floors.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Location\\FloorController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shoptypes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shoptypes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shoptypes.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shoptypes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shoptypes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shoptypes.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shoptypes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/shoptypes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shoptypes.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shoptypes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shoptypes/{shoptype}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shoptypes.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shoptypes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shoptypes/{shoptype}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shoptypes.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shoptypes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/shoptypes/{shoptype}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shoptypes.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shoptypes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/shoptypes/{shoptype}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shoptypes.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shops.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shops.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shops.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shops/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shops.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shops.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shops.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shops.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shops.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shops.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/shops/{shop}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shops.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shops.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shops.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shops.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/shops/{shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.shops.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shop.status-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/shops/status-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@statusUpdate',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@statusUpdate',
        'as' => 'backend.shop.status-update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.shopMedia.remove' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/media-image/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@removeShopMedia',
        'controller' => 'App\\Http\\Controllers\\Backend\\Shop\\ShopController@removeShopMedia',
        'as' => 'backend.shopMedia.remove',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.category.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.category.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.category.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.category.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/category/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.category.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.category.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.category.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Category\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.brand.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.brand.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.brand.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/brand/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.brand.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.brand.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.brand.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.brand.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/brand/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.brand.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.brand.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/brand/{brand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.brand.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.brand.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/brand/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.brand.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.brand.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/brand/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.brand.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\General\\Brand\\BrandController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.colors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/colors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.colors.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.colors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/colors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.colors.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.colors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/colors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.colors.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.colors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/colors/{color}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.colors.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.colors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/colors/{color}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.colors.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.colors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/colors/{color}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.colors.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.colors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/colors/{color}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.colors.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\ColorController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.size.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/size',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.size.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.size.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/size/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.size.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.size.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/size',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.size.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.size.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/size/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.size.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.size.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/size/{size}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.size.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.size.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/size/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.size.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.size.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/size/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.size.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\SizeController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.weights.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/weights',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.weights.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.weights.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/weights/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.weights.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.weights.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/weights',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.weights.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.weights.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/weights/{weight}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.weights.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.weights.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/weights/{weight}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.weights.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.weights.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/weights/{weight}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.weights.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.weights.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/weights/{weight}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.weights.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\Base\\WeightController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.products.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.products.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.products.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.products.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.products.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.products.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.products.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Product\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.orders.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.orders.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.orders.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.orders.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/orders/{order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.orders.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.orders.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.orders.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Order\\OrdersController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.topics.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.topics.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.topics.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/topics/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.topics.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.topics.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.topics.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.topics.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/topics/{topic}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.topics.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.topics.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/topics/{topic}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.topics.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.topics.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/topics/{topic}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.topics.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.topics.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/topics/{topic}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.topics.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\TopicController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.videos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@videos',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@videos',
        'as' => 'backend.videos.index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.videos.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/videos/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@showVideo',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@showVideo',
        'as' => 'backend.videos.show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@templates',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@templates',
        'as' => 'backend.templates.index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.stories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/stories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@stories',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@stories',
        'as' => 'backend.stories.index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.real_experiences.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/real_experiences',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@real_experiences',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@real_experiences',
        'as' => 'backend.real_experiences.index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.memes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/memes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@memes',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@memes',
        'as' => 'backend.memes.index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.interactions.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/interactions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@statusUpdate',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\InteractionController@statusUpdate',
        'as' => 'backend.interactions.update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.comments.index',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@index',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@index',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.comments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.comments.create',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@create',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@create',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.comments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.comments.store',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@store',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@store',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.comments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.comments.show',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@show',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@show',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.comments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backend/comments/{comment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.comments.edit',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@edit',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@edit',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.comments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'backend/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.comments.update',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@update',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@update',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.comments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'backend/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'as' => 'backend.comments.destroy',
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@destroy',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'backend.comments.statusUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'backend/comments/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Backend\\Interaction\\CommentController@changeStatus',
        'as' => 'backend.comments.statusUpdate',
        'namespace' => NULL,
        'prefix' => 'backend',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
