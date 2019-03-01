<?php

return [
    'alipay' => [
        'app_id'         => '2016092700610218',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArcekNEBlbX7M6T81M3CiHZVJjOAA3F+0GPIGSi9bRKAdjG39EgZtx20pIrb8kfBy3u19TXDPAlKgJzU4236AlUg+HzFEfe5LaCYQtnDaa7n50D7k+usLWl3lzyt74bx06pck7Lv0NWI3KWQ8WyYXstKbeVHvFNckKT4D7BbCxQ2w3EZ7HKTPpV+KVoKfxED5zRAmh5IeUjv9vdKBqIBBHbR6y656mpakmosSZSf/gspCGsz9kXhsmYAb98bvQeVz0mJyZamVhsrO+AWYcGvMYXwCZ6VwLjVCWORRAPv1bjo6Bt/NP2fIZA2SSlFOYZZSMWeNcemP285rDsWZz2O6TwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEArXnMcABaCYAC7sd1CRTA1txQMlHUrWCrO1ffUlz36+HyqhhnKDZSt+/8I+WVOXFTG0ESRXuDPFGVC2fxBEvrzkcClIgDdQ9zLERQpD/evQtPsRIe4oOqkNRe5AcKkaymdfgmFI+yKl4TsjrnVFOs0869DuqP8xSuR20RCXX+nISPJyIqmyb29B2WRnbXXuRhl8+Kas9hjVspnuhpVft+E8GBycW1IxkIGJvkcuiVWB9HVQFd/00ainwMcXHPhaRMKUMDyrVQdClc/A5EBgJE7ZZw63iFdrcYeWa2HMoYnoP+xpuX9pkR2LgNwU8UlyyRxW1FnhkS7b+EpuqUuqTTvwIDAQABAoIBAD9h1hFB/6Oi8u9dTuSfgYm/e0m3XlZukIGhLIZCU48Kwgfl3KLznit4co6HDourXSsDDnL2ms+KG0PMmWHxf1mh1k6Al4rIt1MALtqkP3Sg0mAm98PZSZObFISKEhGBnFxT603t5rHWJ6oiHW1RGT9WNPtjNm8hKkAMmIH1a66xoj0idDRDDd7JR9WCMIQXjng3nlW5MU638rGmKcfSQYXjL+pvK2v65mTFjYqxIgvhtD4kq+9b1ZXKu50MjPt0fZaGjGpOKjjK8D77UGmbnbXWcqSn13vGm11vFA3+GMqnaT3LVmCkSMJ6QJmm8Gq3jQjPaxktmx4ZdYIFaew67/kCgYEA1fYjA8a2LWXifQai+h/e+TQjoM1NuJHoDQSY6vj7iLjNa9YYGg6LP6icHvdLQmWcnkYKWBwzRRXhzI7jzTY0WJmXhbQU0SgDU6GbuG9blIL8AlL5FvoERQk8lb2++KBw36lCSUQU7iltQNhZEVAOw5tpor5CxdDB0baJQnl/Pc0CgYEAz49Oh6xo+zp8PnTzphkewt8A/2Zzt+3u6/ZXdDTzSSPzVCr2FS647bMhKBW7L+7+4/JxGsb/DZPRPZa1tzcpzmNKFgAwz8qtRMlPEVi0yZFg4FaBt8+r9fAni26OAjAr3K1y6+67gTE2DEyIYoS1ZeZl/vYyDLZ6Wfu8Ki1Wa7sCgYEAnxdHbdVhPFxXjhNTN5xfFPk5zKUbNzP2UUer1HuRvFV9GMO2ZBmQXKMogrXqFdKsI9t8cYt2a9YbcRiGNd4qCf8adWYzXFneL18pBHh4pfLHI4tCf10js5lsnQLbbs8NXqDiEsw2q+fNvrufbooSkEuMvl+uEpxooWCSqwTgIbkCgYBZKyzGlqgnPhIAVwgRlHslpt5r2pzeKMba8mLR1qmqA1rXDvnXUdI6tBkLeoKHbjpsvUwf/9u0/osG1YdNpdI9C2TZnM1bh6v2gDGKtzw72EvxNNjXmc07hCfI+/7gK8e8L3vOpipBr12T3RE+mdrAY0HwTd5kncRkggRtbjrRXwKBgQCBIw6t0D70Rjruv46cQ4BcAtA9y2PQLm8fhjzxu3DdzaYS5ebGyTTlDTj9Dw1TsUtVLFEXDIUtMy4uLtx1O1iXjTnA/3mR3KC0bfB6NOYV8XuxmA7y/bZXUJ2+Nq7RhgBt+/PxXmb8PB8HKH+L+p4lVJnc8xAYRattlqdYHF9+Wg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];