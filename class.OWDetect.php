<?php
    /**
     * Os && Browser Detect
     */
    class OWDetect {
        public function __construct() {/*Not use*/}
        public function get($t="OS"){//"OS" or "BROWSER"
            if(isset($_SERVER['HTTP_USER_AGENT'])) $ua = $_SERVER['HTTP_USER_AGENT']; else return "unknown";
            $OB = $t == "OS" ? array(['Windows NT 10.0','Windows 10'       ],['Windows NT 6.3','Windows 8.1'   ],['Windows NT 6.2','Windows 8'        ],
                                     ['Windows NT 6.1' ,'Windows 7'        ],['Windows NT 6.0','Windows Vista' ],['Windows NT 5.1','Windows XP'       ],
                                     ['Windows NT 5.2' ,'Windows 2003'     ],['Windows NT 5.0','Windows 2000'  ],['Windows ME'    ,'Windows ME'       ],
                                     ['Win98'          ,'Windows 98'       ],['Win95'         ,'Windows 95'    ],['WinNT4.0'      ,'Windows NT 4.0'   ],
                                     ['Windows Phone'  ,'Windows Phone'    ],['Windows'       ,'Windows'       ],['iPhone'        ,'iPhone'           ],
                                     ['iPad'           ,'iPad'             ],['Debian'        ,'Debian'        ],['Ubuntu'        ,'Ubuntu'           ],
                                     ['Slackware'      ,'Slackware'        ],['Linux Mint'    ,'Linux Mint'    ],['Gentoo'        ,'Gentoo'           ],
                                     ['Elementary OS'  ,'Elementary OS'    ],['Fedora'        ,'Fedora'        ],['Kubuntu'       ,'Kubuntu'          ],
                                     ['Linux'          ,'Linux'            ],['FreeBSD'       ,'FreeBSD'       ],['OpenBSD'       ,'OpenBSD'          ],
                                     ['NetBSD'         ,'NetBSD'           ],['SunOS'         ,'Solaris'       ],['BlackBerry'    ,'BlackBerry'       ],
                                     ['Android'        ,'Android'          ],['Mobile'        ,'Firefox OS'    ],['Mac OS X+'     ,'Mac OS X'         ],
                                     ['CFNetwork+'     ,'Mac OS X'         ],['Macintosh'     ,'Mac OS Classic'],['OS/2'          ,'OS/2'             ],
                                     ['Nintendo'       ,'Nintendo'         ]) :
                               array(['Maxthon'        ,'Maxthon'          ],['SeaMonkey'     ,'SeaMonkey'     ],['Vivaldi'       ,'Vivaldi'          ],
                                     ['Arora'          ,'Arora'            ],['Avant Browser' ,'Avant Browser' ],['Beamrise'      ,'Beamrise'         ],
                                     ['Epiphany'       ,'Epiphany'         ],['Chromium'      ,'Chromium'      ],['Iceweasel'     ,'Iceweasel'        ],
                                     ['Galeon'         ,'Galeon'           ],['Edge'          ,'Microsoft Edge'],['Trident'       ,'Internet Explorer'],
                                     ['MSIE'           ,'Internet Explorer'],['Opera Mini'    ,'Opera Mini'    ],['Opera'         ,'Opera'            ],
                                     ['Firefox'        ,'Mozilla Firefox'  ],['Chrome'        ,'Google Chrome' ],['Safari'        ,'Safari'           ],
                                     ['iTunes'         ,'iTunes'           ],['Konqueror'     ,'Konqueror'     ],['Dillo'         ,'Dillo'            ],
                                     ['Netscape'       ,'Netscape'         ],['Midori'        ,'Midori'        ],['ELinks'        ,'ELinks'           ],
                                     ['Links'          ,'Links'            ],['Lynx'          ,'Lynx'          ],['w3m'           ,'w3m'              ]);
                $o = count($OB);
                for($n=0;$n<$o;$n++){
                    if(strpos(' '.$ua, $OB[$n][0])){
                        return $OB[$n][1];
                    }
                }
            return "unknown";
        }
    }
    /*
      Use:
      include(class.OWDetect.php");
      $owd = new OWDetect();
      echo "The OS is: ".$owd->get("OS");
      echo "The Browser is: ".$owd->get("BROWSER");
    */
?>
