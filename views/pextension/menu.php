<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pextension */

$this->params["menu"]=[
                            'label' => 'Proyectos',
                            'icon' => 'fas fa-folder-open',
                            'url' => ['/pextension/view'],
                            'items' =>[
                                ['label' => 'Integrantes',
                                    'icon' => 'fas fa-file-alt',
                                    'url' => ['#']
                                    ],
                                ['label' => 'Organizaciones participantes',
                                    'icon' => 'fas fa-file-alt',
                                    'url' => ['#']
                                    ],
                                ['label' => 'Destinatarios',
                                    'icon' => 'fas fa-file-alt',
                                    'url' => ['/destinatarios/index/'.$model->id_pext]
                                    ],
                                ['label' => 'Objetivos y Actividades',
                                    'icon' => 'fas fa-file-alt',
                                    'url' => ['#']
                                    ],
                                ['label' => 'Presupuesto',
                                    'icon' => 'fas fa-file-alt',
                                    'url' => ['#']
                                    ],
                            ]
                        ];

