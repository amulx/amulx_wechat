#!/bin/bash
IP=`hostname -I`
# echo $IP

cpu_num=`grep -c 'model name' /proc/cpuinfo`
# echo $cpu_num

# 抓取当前系统15分钟的平均负载值 $NF表输出最后一段的内容 
load_15=`uptime | awk '{print $NF}'`
# echo $load_15

# 计算当前系统单个核心15分钟的平均负载值，结果小于1.0时前面个位数补0,bc运算，保留两位小数
average_load=`echo "scale=2;a=$load_15/$cpu_num;if(length(a)==scale(a)) print 0;print a" | bc`
# echo $average_load;

# 取上面平均负载值的个位整数
average_int=`echo $average_load | cut -f 1 -d "."`
# echo $average_int

load_warn=0.75

load_now=`expr $average_load \> $load_warn`
echo $load_now

if(($average_int > 0));then
    echo 'load to high'
elif [ $load_now == 1 ];then
    echo 'high 0.75'
else
    echo 'no thing'
fi

