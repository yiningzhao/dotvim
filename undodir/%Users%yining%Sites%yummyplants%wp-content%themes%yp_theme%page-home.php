Vim�UnDo� �� ���H%O��+I��LD��|�g����η�    {   }            ORDER BY str_to_date(CONCAT(republish_date.meta_value, " ", republish_time.meta_value), '%Y-%m-%d %H:%i:%s') DESC   "   C                       P��    _�                           ����                                                                                                                                                                                                                                                                                                                                                             P��>     �      #          �         ~    5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             P��C     �         �       �         �    5�_�                    #       ����                                                                                                                                                                                                                                                                                                                                                             P��K    �   "   $   �                  LIMIT 15�_�                            ����                                                                                                                                                                                                                                                                                                                                                             P��O     �         �      $querystr = "5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             P��P     �         �          $querystr = "5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             P��P     �         �              $querystr = "5�_�      	                      ����                                                                                                                                                                                                                                                                                                                                                             P��R     �         �      ySELECT wp_posts.*, str_to_date(republish_date.meta_value, '%Y-%m-%d'), str_to_date(republish_time.meta_value, '%H:%i:%s')5�_�      
           	          ����                                                                                                                                                                                                                                                                                                                                                             P��R     �         �      }    SELECT wp_posts.*, str_to_date(republish_date.meta_value, '%Y-%m-%d'), str_to_date(republish_time.meta_value, '%H:%i:%s')5�_�   	              
          ����                                                                                                                                                                                                                                                                                                                                                             P��T     �         �      �        SELECT wp_posts.*, str_to_date(republish_date.meta_value, '%Y-%m-%d'), str_to_date(republish_time.meta_value, '%H:%i:%s')5�_�   
                        ����                                                                                                                                                                                                                                                                                                                                                             P��V     �         �      �            SELECT wp_posts.*, str_to_date(republish_date.meta_value, '%Y-%m-%d'), str_to_date(republish_time.meta_value, '%H:%i:%s')5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             P��W     �         �                  $querystr = "5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             P��Y     �         �              $querystr = "   ySELECT wp_posts.*, str_to_date(republish_date.meta_value, '%Y-%m-%d'), str_to_date(republish_time.meta_value, '%H:%i:%s')�         �      �        SELECT wp_posts.*, str_to_date(republish_date.meta_value, '%Y-%m-%d'), str_to_date(republish_time.meta_value, '%H:%i:%s')5�_�                      '    ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P��f    �         �      �        $querystr = " SELECT wp_posts.*, str_to_date(republish_date.meta_value, '%Y-%m-%d'), str_to_date(republish_time.meta_value, '%H:%i:%s')5�_�                           ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P��m    �         �                  FROM wp_posts5�_�                           ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P��~    �         �      3            JOIN wp_postmeta AS republish_date ON (5�_�                           ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P�É    �         �      3            JOIN wp_postmeta AS republish_time ON (5�_�                        f    ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P�Ù     �      !   �      �            WHERE wp_posts.post_status = 'publish' AND str_to_date(CONCAT(republish_date.meta_value, " ", republish_time.meta_value), '%Y-%m-%d %H:%i:%s') <= NOW()5�_�                        h    ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P�Û    �      !   �      �            WHERE wp_posts.post_status = 'publish' AND str_to_date(CONCAT(republish_date.meta_value, ' ", republish_time.meta_value), '%Y-%m-%d %H:%i:%s') <= NOW()5�_�                        3    ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P�á    �      "   �      �            WHERE wp_posts.post_status = 'publish' AND str_to_date(CONCAT(republish_date.meta_value, ' ', republish_time.meta_value), '%Y-%m-%d %H:%i:%s') <= NOW()5�_�                    #       ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P�æ    �   "   $   �                  LIMIT 1"5�_�                    #       ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P�è   	 �   #   %   �    5�_�                    %        ����                                                                                                                                                                                                                                                                                                                            %           6           v        P�ì   
 �   $   &   �              $querystr = "                SELECT wp_posts.*    )            FROM $wpdb->posts AS wp_posts   7            JOIN $wpdb->postmeta AS republish_date ON (   4                wp_posts.ID = republish_date.post_id   >                AND republish_date.meta_key = 'Republish_Date'   S                AND str_to_date(republish_date.meta_value, '%Y-%m-%d') <= CURDATE()               )   7            JOIN $wpdb->postmeta AS republish_time ON (   4                wp_posts.ID = republish_time.post_id   >                AND republish_time.meta_key = 'Republish_Time'   S                AND str_to_date(republish_time.meta_value, '%H:%i:%s') <= CURTIME()               )   2            WHERE wp_posts.post_status = 'publish'   �            ORDER BY str_to_date(republish_date.meta_value, '%Y-%m-%d') DESC, str_to_date(republish_time.meta_value, '%H:%i:%s') DESC               LIMIT 1   
        ";           5�_�                    %        ����                                                                                                                                                                                                                                                                                                                            %           %           v        P�î    �   $   %                 5�_�                           ����                                                                                                                                                                                                                                                                                                                            %           %           v        P���    �         {      '        $querystr = " SELECT wp_posts.*5�_�                    "   C    ����                                                                                                                                                                                                                                                                                                                            %           %           v        P��     �   !   #   {      }            ORDER BY str_to_date(CONCAT(republish_date.meta_value, " ", republish_time.meta_value), '%Y-%m-%d %H:%i:%s') DESC5�_�                     "   E    ����                                                                                                                                                                                                                                                                                                                            %           %           v        P��    �   !   #   {      }            ORDER BY str_to_date(CONCAT(republish_date.meta_value, ' ", republish_time.meta_value), '%Y-%m-%d %H:%i:%s') DESC5�_�                          ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P��d     �         �              $querystr = " SELECT 5�_�                            ����                                                                                                                                                                                                                                                                                                                               '          -       V   -    P��_     �              5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             P��9     �         ~       �               ySELECT wp_posts.*, str_to_date(republish_date.meta_value, '%Y-%m-%d'), str_to_date(republish_time.meta_value, '%H:%i:%s')               FROM wp_posts   3            JOIN wp_postmeta AS republish_date ON (   4                wp_posts.ID = republish_date.post_id   >                AND republish_date.meta_key = 'Republish_Date'               )   3            JOIN wp_postmeta AS republish_time ON (   4                wp_posts.ID = republish_time.post_id   >                AND republish_time.meta_key = 'Republish_Time'               )   �            WHERE wp_posts.post_status = 'publish' AND str_to_date(CONCAT(republish_date.meta_value, " ", republish_time.meta_value), '%Y-%m-%d %H:%i:%s') <= NOW()   }            ORDER BY str_to_date(CONCAT(republish_date.meta_value, " ", republish_time.meta_value), '%Y-%m-%d %H:%i:%s') DESC               LIMIT 15��