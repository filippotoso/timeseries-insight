<?php

return [
    'interfaces' => [
        'google.cloud.timeseriesinsights.v1.TimeseriesInsightsController' => [
            'AppendEvents' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{dataset=projects/*/locations/*/datasets/*}:appendEvents',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{dataset=projects/*/datasets/*}:appendEvents',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'dataset' => [
                        'getters' => [
                            'getDataset',
                        ],
                    ],
                ],
            ],
            'CreateDataSet' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=projects/*/locations/*}/datasets',
                'body' => 'dataset',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{parent=projects/*}/datasets',
                        'body' => 'dataset',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteDataSet' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/datasets/*}',
                'additionalBindings' => [
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v1/{name=projects/*/datasets/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'EvaluateSlice' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{dataset=projects/*/locations/*/datasets/*}:evaluateSlice',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{dataset=projects/*/datasets/*}:evaluateSlice',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'dataset' => [
                        'getters' => [
                            'getDataset',
                        ],
                    ],
                ],
            ],
            'EvaluateTimeseries' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=projects/*/locations/*}/datasets:evaluateTimeseries',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{parent=projects/*}/datasets:evaluateTimeseries',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListDataSets' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{parent=projects/*/locations/*}/datasets',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{parent=projects/*}/datasets',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'QueryDataSet' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/datasets/*}:query',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{name=projects/*/datasets/*}:query',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
