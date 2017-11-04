<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6f4ce033039f6c51d9532719449c55d4a4f2c11f37f9fcb7c35eb01a47ee1679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8db73b118b9884cf8d3da97d37a06a657404d02e6f3bb6ae6819986895058f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db73b118b9884cf8d3da97d37a06a657404d02e6f3bb6ae6819986895058f4a->enter($__internal_8db73b118b9884cf8d3da97d37a06a657404d02e6f3bb6ae6819986895058f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9fa0b30e4bcc23930a300eae4f8439dabe23220bacf16855bd17cc8e77ec2ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa0b30e4bcc23930a300eae4f8439dabe23220bacf16855bd17cc8e77ec2ec2->enter($__internal_9fa0b30e4bcc23930a300eae4f8439dabe23220bacf16855bd17cc8e77ec2ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8db73b118b9884cf8d3da97d37a06a657404d02e6f3bb6ae6819986895058f4a->leave($__internal_8db73b118b9884cf8d3da97d37a06a657404d02e6f3bb6ae6819986895058f4a_prof);

        
        $__internal_9fa0b30e4bcc23930a300eae4f8439dabe23220bacf16855bd17cc8e77ec2ec2->leave($__internal_9fa0b30e4bcc23930a300eae4f8439dabe23220bacf16855bd17cc8e77ec2ec2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
