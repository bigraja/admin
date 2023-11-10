<center> ## Laravel Admin</center>

## Add admin side nav item

<h5 a><strong><code>ServiceProvider.php</code></strong></h5>

```php
    public function register()
    {
        $this->addSideNavItems([
            'Dashboard' =>['href' => '/admin/dashboard'],
            'Page' =>
            [
                'more' => [
                    'All Pages' => 'admin/all-page',
                    'New Page' => 'admin/new-page'
                ]
            ]
        ]);
    }
```
