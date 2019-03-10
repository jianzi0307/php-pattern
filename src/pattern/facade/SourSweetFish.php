<?php
/**
 * User: jian0307@icloud.com
 * Date: 2017/3/29
 * Time: 9:26
 */

namespace src\pattern\facade;

/**
 * 糖醋鱼
 * @package src\pattern\facade
 */
class SourSweetFish
{
    public function prepare(): void
    {
        print '1. 所有材料准备好。鲤鱼去鳞、鳃和内脏，清洗干净。' . PHP_EOL;
    }

    public function step1(): void
    {
        print '2. 鱼身两侧每隔2厘米切一刀至鱼骨,然后顺骨向前切1厘米,使鱼肉翻起。' . PHP_EOL;
        print '先用白酒涂抹在鱼身上，再用1/2茶匙的盐和1/4茶匙的胡椒粉拌匀后涂抹在鱼肉上，内外都要抹匀，腌制10分钟。' . PHP_EOL;
    }

    public function step2(): void
    {
        print '3. 干淀粉放入碗中加入适量的水调成淀粉糊。' . PHP_EOL;
        print '把淀粉糊充分搅匀后淋在鱼身上，用手抹匀。' . PHP_EOL;
    }

    public function step3(): void
    {
        print '4. 葱姜蒜切小粒。' . PHP_EOL;
        print '锅内放入足量的油，油烧至7成热左右。' . PHP_EOL;
    }

    public function step4(): void
    {
        print '5. 手提着鱼尾在锅上面，用勺在鱼身上浇淋热油，使打好花刀的鱼肉外翻定型。然后把鱼顺锅边划入油锅内,边炸边向鱼身上浇热油，中火炸至鱼皮变酥。' . PHP_EOL;
    }

    public function step5(): void
    {
        print '6. 捞出炸好的鲤鱼放入鱼盘中。锅内留底油，爆香葱姜蒜粒。再放入番茄酱略炒。锅内加入适量的水，再放入剩余的盐、胡椒粉和白糖、陈醋、味精大火烧开。' . PHP_EOL;
        print '淋入适量水淀粉炒匀。再放入1汤匙的熟油。直到锅内芡汁明亮均匀。' . PHP_EOL;
    }

    public function end(): void
    {
        print '7. 把芡汁浇到炸好的鲤鱼上面即可。' . PHP_EOL;
    }
}