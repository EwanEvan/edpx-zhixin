<?php
/**
 * brief of ClassMapper.php:
 * 
 * ɨ��Ŀ¼������ӳ�����ݣ��������Bd_Autoloader���Զ����ء�
 * ��ֲ��Bingo1�Լ�����club���Զ����ء�
 * 
 * @author zhangdongjin(zhangdongjin@baidu.com)
 * @date 2011/11/23 14:40:05
 * @version $Revision: 1.6 $ 
 * @todo 
 */

class Bd_ClassMapper
{
    /**
     * @brief   �Ը�����һ��Ŀ¼���ҳ��������е��ൽ�ļ��Ĺ�ϵӳ��
     *
     * @params  $dirs - Ŀ¼����
     * @return  array
     * @retval  array(
     *              'class1' => '/xxx/xxx/xxx/xx.php'
     *              'class2' => '/xxx/xxx/xxx/xx.php'
     *              ...
     *              )
     **/
    public static function buildMap($arrDirs)
    {
        if(is_string($arrDirs))
        {
            $arrDirs = array($arrDirs);
        }

        $arrClasses = array();

        foreach($arrDirs as $dir)
        {
            if($dir{strlen($dir) - 1} == '/')
            {
                $dir = substr($dir, 0, strlen($dir) - 1);
            }
            $files = self::__getAllFilesRecu($dir);
            $classes = self::__buildClassPath($files);
            $arrClasses = array_merge($arrClasses, $classes);
        }
        return $arrClasses;
    }

    /**
     * @brief   �Ը�����һ���ļ����ҵ����д��ڵ�class���õ�class->file��ӳ�� 
     *
     * @return  private static function 
     * @retval   
     * @date 2009/07/09 11:49:34
     **/
    private static function __buildClassPath($files)
    {
        $classPath = array();
        foreach($files as $per)
        {
            // ����ļ���׺
            $tail = substr($per, -4);
            if($tail != '.php' && $tail != '.inc')
            {
                continue;
            }

            // ����ƥ�����ͽӿ�
            preg_match_all('~^\s*(?:abstract\s+|final\s+)?(?:class|interface)\s+(\w+)~mi',
                file_get_contents($per), $res);
            if(count($res[1]) == 0)
            {
                continue;
            }

            // ����ÿ�����ӿ�
            foreach($res[1] as $value)
            {
                $tmp = trim($value);
                if($tmp !== '')
                {
                    if(isset($classPath[$tmp]))
                    {
                        trigger_error("classname '$tmp' conflict: '$per' and '{$classPath[$tmp]}' !", E_USER_ERROR);
                    }
                    $classPath[$tmp] = $per;
                }
            }
        }
        return $classPath;
    }

    /**
     * @brief �ݹ��ȡ�ļ����µ������ļ�
     * @desc  ���ǵ�php����Եݹ���ε����ƣ�Ϊ����core dump���˴����ù��ѱ���
     *
     * @return  private static function 
     * @retval   
     * @date 2009/07/09 11:52:32
     **/
    private static function __getAllFilesRecu($dir)
    {
        $first = 0;
        $last = 1;
        $queue = array($dir);
        $files = array();
        while($first < $last) 
        {
            $value = $queue[$first++];
            if(!is_dir($value))
            {
                if(is_file($value))
                {
                    array_push($files,$value);   
                }
            }
            else
            {
                $arr = scandir($value);
                if($arr === false)
                {
                    continue;
                }
                foreach($arr as $per)
                {
                    if($per{0} == '.')
                    {
                        continue;
                    }
                    $tmp = $value."/".$per;
                    $queue[$last++] = $tmp;
                }
            }
        }
        return $files;
    }
}

?>
