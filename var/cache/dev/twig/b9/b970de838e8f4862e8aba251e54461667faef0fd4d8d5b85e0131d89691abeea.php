<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c9a22f6232f523620a43cb73264546a4a7ebf73ef4ae88aaf7169e6d28ddd7bf extends Twig_Template
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
        $__internal_36d9eebc8ab9d13234ce8e76e3d57008559c3799f43d572fd0caf5c9eeeb11a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d9eebc8ab9d13234ce8e76e3d57008559c3799f43d572fd0caf5c9eeeb11a0->enter($__internal_36d9eebc8ab9d13234ce8e76e3d57008559c3799f43d572fd0caf5c9eeeb11a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2e4b761e19a834ad1c85a466c3be08d01e41e06ca7b88ec10c3ebfd1ba18876f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4b761e19a834ad1c85a466c3be08d01e41e06ca7b88ec10c3ebfd1ba18876f->enter($__internal_2e4b761e19a834ad1c85a466c3be08d01e41e06ca7b88ec10c3ebfd1ba18876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_36d9eebc8ab9d13234ce8e76e3d57008559c3799f43d572fd0caf5c9eeeb11a0->leave($__internal_36d9eebc8ab9d13234ce8e76e3d57008559c3799f43d572fd0caf5c9eeeb11a0_prof);

        
        $__internal_2e4b761e19a834ad1c85a466c3be08d01e41e06ca7b88ec10c3ebfd1ba18876f->leave($__internal_2e4b761e19a834ad1c85a466c3be08d01e41e06ca7b88ec10c3ebfd1ba18876f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
