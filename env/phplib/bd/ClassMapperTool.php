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

class Bd_ClassMapperTool
{
    public static function export($arrDirs)
    {
        var_export(Bd_ClassMapper::buildMap($arrDirs));
    }
}

Bd_Init::init();
array_shift($argv);
Bd_ClassMapperTool::export($argv);

?>
